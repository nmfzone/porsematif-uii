<?php

namespace App\Awesome\Contracts\Controllers\User;

use App\User;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

interface UserContract
{
    /**
     * Display a listing of the user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index();

    /**
     * Show the form for creating a new user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create();

    /**
     * Store a newly created user in storage.
     *
     * @param  App\Http\Requests\Users\CreateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request);

    /**
     * Display the specified user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show();

    /**
     * Show the form for editing the specified user.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $setting = false, $pageTitle = "Edit User");

    /**
     * Update the specified user in storage.
     *
     * @param  App\Http\Requests\Users\UpdateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user);

    /**
     * Remove the specified user from storage.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user);

    /**
     * Show the form for editing the current user.
     *
     * @param  App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function setting();
}
