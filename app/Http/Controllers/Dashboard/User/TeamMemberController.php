<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Awesome\Contracts\Controllers\User\UserContract;
use Message;

use App\User;
use App\Role;

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
        $pageTitle = $this->message->shout('index.title');
        $user = $this->user;

        return view('dashboard.user.users.index', compact('pageTitle', 'user'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/dashboard');
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
        return redirect('/dashboard');
    }

    /**
     * Display the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $setting = false, $pageTitle = "Edit User")
    {
        if ($setting) {
		    return view('dashboard.user.users.edit', compact('setting', 'pageTitle', 'user'));
        }

        return redirect('/dashboard');
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
        return redirect('/dashboard');
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
}
