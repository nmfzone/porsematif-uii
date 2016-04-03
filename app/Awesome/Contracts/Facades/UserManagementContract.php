<?php

namespace App\Awesome\Contracts\Facades;

interface UserManagementContract
{
    /**
     * Count the user that register on that day.
     *
     * @return int
     */
    public static function userRegisterTodayCount();

    /**
     * Count the verified user.
     *
     * @return int
     */
    public static function verifiedUserCount();

    /**
     * Count the not verified user.
     *
     * @return int
     */
    public static function notVerifiedUserCount();
}
