<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Message;
use Datatables;
use UserMan;
use Carbon\Carbon;
use App\DataTables\UsersDataTable;

use App\User;
use App\Role;
use App\Category;
use App\Image;
use App\TeamMember;
use App\UserCategory;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

use App\Awesome\Contracts\Controllers\Admin\UserManagementContract;

// class UserManagementController extends Controller implements UserManagementContract
class UserManagementController extends Controller
{
    /**
     * The loader implementation.
     *
     * @var \App\Services\MessagesTranslator
     */
    protected $message;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message->setBase('messages.ctrl.userMan');
    }

    /**
     * Display a listing of the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = $this->message->shout('index.title');

        return view('dashboard.admin.users.index', compact('pageTitle'));
    }

    /**
     * Display a listing of the user that registered on that day.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersOnThatDay()
    {
        $pageTitle = $this->message->shout('usersOnThatDay.title');

        return view('dashboard.admin.users.users_on_that_day', compact('pageTitle'));
    }

    /**
     * Display a listing of the verified users.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifiedUsers()
    {
        $pageTitle = $this->message->shout('verified.title');

        return view('dashboard.admin.users.verified', compact('pageTitle'));
    }

    /**
     * Display a listing of the not verified users.
     *
     * @return \Illuminate\Http\Response
     */
    public function notVerifiedUsers()
    {
        $pageTitle = $this->message->shout('notVerified.title');

        return view('dashboard.admin.users.not_verified', compact('pageTitle'));
    }

    /**
     * Get all users by ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers()
    {
        return Datatables::of(User::where('status', 0))
            ->addColumn('action', function ($user) {
                $action = '<a href="'. url("dashboard/protected/users/" . $user->id . "/edit") .'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user->id) .'" class="btn btn-xs btn-success show-this"><i class="glyphicon glyphicon-zoom-in"></i> Lihat</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user->id) .'" class="btn btn-xs btn-primary delete-this"><i class="glyphicon glyphicon-remove"></i> Hapus</a>';
                return $action;
            })
            ->make(true);
    }

    /**
     * Get users that registered on that day by ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsersOnThatDay()
    {
        return Datatables::of(UserCategory::where('created_at', '>=', Carbon::today())->with('user')->with('category'))->make(true);
    }

    /**
     * Get not verified users by ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNotVerifiedUsers()
    {
        return Datatables::of(UserCategory::where('verified', 0)->with('user')->with('category'))
            ->addColumn('action', function ($user_category) {
                // dd($user_category->category->name);
                $action = '<a href="'. url("dashboard/protected/users/" . $user_category->user->id . "/edit") .'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user_category->user->id) .'" class="btn btn-xs btn-success show-this"><i class="glyphicon glyphicon-zoom-in"></i> Lihat</a>';
                $action .= '<a href="'. url("dashboard/protected/users/makeVerified/" . $user_category->id) .'" class="btn btn-xs btn-warning verified-this"><i class="glyphicon glyphicon-ok"></i> Verifikasi</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user_category->id . "/destroy") .'" class="btn btn-xs btn-danger delete-this"><i class="glyphicon glyphicon-remove"></i> Hapus</a>';
                return $action;
            })
            ->make(true);
    }

    /**
     * Get verified users by ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getVerifiedUsers()
    {
        return Datatables::of(UserCategory::where('verified', 1)->with('user')->with('category'))
            ->addColumn('action', function ($user_category) {
                $action = '<a href="'. url("dashboard/protected/users/" . $user_category->user->id . "/edit") .'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user_category->user->id) .'" class="btn btn-xs btn-success show-this"><i class="glyphicon glyphicon-zoom-in"></i> Lihat</a>';
                $action .= '<a href="'. url("dashboard/protected/users/makeUnverified/" . $user_category->id) .'" data-message="User status in this competition will be unverified." data-button-text="Yes, unverified it!" class="btn btn-xs btn-warning verified-this"><i class="glyphicon glyphicon-ok"></i> Unverifikasi</a>';
                $action .= '<a href="'. url("dashboard/protected/users/" . $user_category->id . "/destroy") .'" class="btn btn-xs btn-primary delete-this"><i class="glyphicon glyphicon-remove"></i> Hapus</a>';
                return $action;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $pageTitle = $this->message->shout('create.title');
        $competitions = $category->all();
        $setting = false;

        return view('dashboard.admin.users.create', compact('pageTitle', 'competitions', 'setting'));
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  App\Http\Requests\Users\CreateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, User $user, Role $role, Category $category, UserCategory $userCategory)
    {
        $userRole = $role->whereName('User')->first()->id;
        $user = $user->newInstance($request->all());
        $user->role_id = $userRole;
        $user->save();

        if (!$this->competitionManager($request, $user, $category, $userCategory)) {
            alert()->error("Maaf ada kesalahan sistem :(")->persistent("Close");
            return redirect()->back();
        }

        alert()->success($this->message->shout('store.success'))->persistent("Close");

        return redirect('dashboard/protected');
    }

    /**
     * Display the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, TeamMember $teamMember, Category $category)
    {
        $pageTitle = $user->name;
        $competitions = $user->category->all();
        $members = $user->member()->orderBy('position', 'desc')->get();
        $bukti_pembayaran = $user->image()->where('type', 'Bukti Pembayaran')->get();
        $surat_pernyataan = $user->image()->where('type', 'Surat Pernyataan')->get();
        $hasGrantedCompetition = UserMan::onlyGrantedCompetitions($user);
        $products = $user->product()->get();

        return view(
            'dashboard.admin.users.show',
            compact(
                'pageTitle',
                'user',
                'competitions',
                'members',
                'bukti_pembayaran',
                'surat_pernyataan',
                'hasGrantedCompetition',
                'products',
                'category'
            )
        );
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Category $category, $setting = false, $pageTitle = "Edit User")
    {
        if (!$setting && $user->id == 1) {
            return redirect('/dashboard/protected');
        }

        $competitions = $category->all();
        $user_competitions = $user->category()->get();

        $i = 0;
        $registered_competitions= [];
        foreach ($user_competitions as $data) {
            $registered_competitions[$i++] = $data->id;
        }

        return view(
            'dashboard.admin.users.edit',
            compact(
                'setting',
                'user',
                'pageTitle',
                'competitions',
                'registered_competitions'
            )
        );
    }

    /**
     * Update the specified user in storage.
     *
     * @param  App\Http\Requests\Users\UpdateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user, Category $category, UserCategory $userCategory)
    {
        $user->update($request->except(['competition']));

        if ($request->setting) {
            alert()->success($this->message->shout('update.success.a'))->persistent("Close");
            return redirect()->back();
        }

        if (!$this->competitionManager($request, $user, $category, $userCategory)) {
            alert()->error("Maaf ada kesalahan sistem :(")->persistent("Close");
            return redirect()->back();
        }

        alert()->success($this->message->shout('update.success.b'))->persistent("Close");

        return redirect('dashboard/protected');
    }

    /**
     * Make the given user_category verified.
     *
     * @param  App\UserCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function verifyUserByCategory($id, UserCategory $userCategory)
    {
        $userCategory = $userCategory->findOrFail($id);

        $userCategory->update([
            'verified' => 1
        ]);

        alert()->success("Pendaftaran berhasil di verifikasi.")->persistent("Close");

        return redirect()->back();
    }

    /**
     * Make the given user_category verified.
     *
     * @param  App\UserCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function unverifyUserByCategory($id, UserCategory $userCategory)
    {
        $userCategory = $userCategory->findOrFail($id);

        $userCategory->update([
            'verified' => 0
        ]);

        alert()->success("Pendaftaran berhasil di unverifikasi.")->persistent("Close");

        return redirect()->back();
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            alert()->success($this->message->shout('destroy.error'))->persistent("Close");
            return redirect()->back();
        }

        $user->delete();

        alert()->success($this->message->shout('destroy.success.a'))->persistent("Close");

        return redirect()->back();
    }

    /**
     * Remove the specified user_category from storage.
     *
     * @param  App\UserCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function destroyUserCategories($id, UserCategory $userCategory)
    {
        $userCategory = $userCategory->findOrFail($id);
        $userCategory->delete();

        alert()->success($this->message->shout('destroy.success.b'))->persistent("Close");

        return redirect()->back();
    }

    /**
     * Show the form for editing the current user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function setting(Category $category)
    {
        $user = auth()->user();
        $pageTitle = ucfirst($user->username) . " Account";

        return $this->edit($user, $category, true, $pageTitle);
    }

    public function competitionManager($request, User $user, $category, $userCategory)
    {
        $checked_competition = $request->get('competition');
        $user_competition = $userCategory->where('user_id', $user->id)->get();

        foreach ($checked_competition as $id) {
            if (!$category->find($id)) {
                return false;
            }
        }

        $user_cat = [];
        $i = 0;
        foreach ($user_competition as $data) {
            if (!in_array($data->category_id, $checked_competition)) {
                $userCategory->destroy($data->id);
            } else {
                $user_cat[$i++] = $data->category_id;
            }
        }

        foreach($checked_competition as $id) {
            if (!in_array($id, $user_cat)) {
                $userCategory->create([
                    'user_id'       => $user->id,
                    'category_id'   => $id
                ]);
            }
        }

        return true;
    }
}
