<?php

namespace App\Policies;

use App\User;

class TeamMemberPolicy
{
    /**
     * Determine if user can make create team member request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function createTeamMember(User $user)
    {
        return $user->hasRole("User");
    }

    /**
     * Determine if user can make update team member request.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function updateTeamMember(User $user)
    {
        return $user->hasRole("User");
    }
}
