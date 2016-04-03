<?php

namespace App\Policies;

use App\User;

class UserPolicy
{
    /**
     * Determine if user can make create users request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function createUsersMan(User $user)
    {
        return $user->role->name == "Admin";
    }

    /**
     * Determine if user can make update users request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function updateUsersMan(User $user)
    {
        return $user->role->name == "Admin" || $user->role->name == "User";
    }

    /**
     * Determine if user can make create team member request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function createTeamMember(User $user)
    {
        return $user->role->name == "User";
    }

    /**
     * Determine if user can make update team member request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function updateTeamMember(User $user)
    {
        return $user->role->name == "User";
    }

}
