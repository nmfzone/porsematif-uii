<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Awesome\Contracts\Controllers\User\UserContract;
use Message;

use App\User;
use App\TeamMember;
use App\UserCategory;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class UserController extends Controller implements UserContract
{
    /**
     * The loader implementation.
     *
     * @var \App\Services\MessagesTranslator
     */
    protected $message;

    /**
     * The authenticated user.
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message->setBase('messages.ctrl.user');
        $this->user = auth()->user();
    }

    /**
     * Display a listing of the user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check = $this->atLeatHasBeenRegistered();
        if ("" != $check) {
            return redirect($check);
        }

        $pageTitle = $this->message->shout('index.title');
        $user = $this->user;
        $members = $this->user->member()->get();
        $bukti_pembayaran = $this->user->image()->where('type', 'Bukti Pembayaran')->get();
        $surat_pernyataan = $this->user->image()->where('type', 'Surat Pernyataan')->get();

        return view('dashboard.user.users.index', compact('pageTitle', 'user', 'members', 'bukti_pembayaran', 'surat_pernyataan'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  App\Http\Requests\Users\CreateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        return abort(404);
    }

    /**
     * Display the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $setting = false, $pageTitle)
    {
        if ($setting) {
            return view('dashboard.user.users.edit', compact('setting', 'pageTitle', 'user'));
        }

        return abort(404);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  App\Http\Requests\Users\UpdateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());

        alert()->success($this->message->shout('update.success'))->persistent("Close");

        return redirect('dashboard/users');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the current user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $user = auth()->user();
        $pageTitle = ucfirst($this->user->username) . " Account";

        return $this->edit($user, true, $pageTitle);
    }

    public function atLeatHasBeenRegistered()
    {
        $rs = $this->user->category()->first();

        if ($rs == null) {
            alert()->error($this->message->shout('alhbr.error'))->persistent("Close");

            return "/dashboard/competitions/register";
        }

        return "";
    }
}
