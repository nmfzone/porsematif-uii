<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Awesome\Contracts\Controllers\Admin\UserManagementContract;
use Message;

use App\User;
use App\Role;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class UserManagementController extends Controller implements UserManagementContract
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
        $this->message = $message->setBase('messages.ctrl.user');
    }

    /**
     * Display a listing of the user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $pageTitle = $this->message->shout('index.title');
        $users = $user->paginate(100);

        return view('dashboard.admin.users.list', compact('pageTitle', 'users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        $pageTitle = $this->message->shout('create.title');
        $roles = $role->all();

        return view('dashboard.admin.users.create', compact('pageTitle', 'roles'));
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  App\Http\Requests\Users\CreateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, User $user)
    {
        $user->create($request->all());
        alert()->success($this->message->shout('store.success'))->persistent("Close");

        return redirect('dashboard/protected/users');
    }

    /**
     * Display the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Role $role, $setting = false, $pageTitle = "Edit User")
    {
        $roles = $role->all();

		return view('dashboard.admin.users.edit', compact('setting', 'pageTitle', 'user', 'roles'));
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

        if ($request->setting) {
            alert()->success($this->message->shout('update.success.a'))->persistent("Close");
            return redirect()->back();
        }
        alert()->success($this->message->shout('update.success.b'))->persistent("Close");

        return redirect('dashboard/protected/users');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        if ($user->id == auth()->user()->id) {
            alert()->success($this->message->shout('destroy.success.a'))->persistent("Close");
            auth()->logout();
            return redirect('auth/login');
        }
        alert()->success($this->message->shout('destroy.success.b'))->persistent("Close");

        return redirect('dashboard/protected/users');
    }

    /**
     * Show the form for editing the current user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function setting(Role $role)
    {
        $user = auth()->user();
        $pageTitle = ucfirst($user->username) . " Account";

        return $this->edit($user, $role, true, $pageTitle);
    }
}
