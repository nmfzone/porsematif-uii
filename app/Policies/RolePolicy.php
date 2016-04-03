<?php

namespace App\Policies;

use App\User;
use App\Role;

class RolePolicy
{
    /**
     * Determine if user can make create category request.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return bool
     */
    public function createCategory(User $user, Role $role)
    {
        return $role->name == "Admin";
    }

    /**
     * Determine if user can make update category request.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return bool
     */
    public function updateCategory(User $user, Role $role)
    {
        return $role->name == "Admin";
    }

    /**
     * Determine if user can make competition registration request.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return bool
     */
    public function registerCompetition(User $user, Role $role)
    {
        return $role->name == "User";
    }

    /**
     * Determine if user can make add competition requirements request.
     *
     * @param  App\User  $user
     * @param  App\Role  $role
     * @return bool
     */
    public function addCompetitionRequirements(User $user, Role $role)
    {
        return $role->name == "User";
    }

    /**
     * Determine if user can make gallery uploads request.
     *
     * @param  App\User  $user
     * @return bool
     **/
    public function galleryUploads(User $user, Role $role)
    {
        return $role->name == "Admin";
    }

}
