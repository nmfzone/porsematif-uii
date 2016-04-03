<?php

namespace App\Awesome\Facades\UserManagement;

use Exception;
use Carbon\Carbon;

use App\User;
use App\UserCategory;
use App\Awesome\Contracts\Facades\UserManagementContract;

class UserManagementImpl implements UserManagementContract
{
    /**
     * Count the user that register on that day.
     *
     * @return int
     */
    public static function userRegisterTodayCount()
    {
        return User::where('created_at', '>=', Carbon::today())->count();
    }

    /**
     * Count the verified user.
     *
     * @return int
     */
    public static function verifiedUserCount()
    {
        return UserCategory::where('verified', 1)->count();
    }

    /**
     * Count the not verified user.
     *
     * @return int
     */
    public static function notVerifiedUserCount()
    {
        return UserCategory::where('verified', 0)->count();
    }
}
