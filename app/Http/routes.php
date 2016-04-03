<?php

/*----------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Route::get('/coba', 'TestController@coba');
// Route::get('/email-verify/{id}', 'TestController@sendMails');

Route::get('/', 'HomeController@index');

Route::get('/competitions', 'CompetitionController@index');
Route::get('/competitions/terms', 'CompetitionController@terms');
Route::get('/competitions/web-development', 'CompetitionController@webDev');
Route::get('/competitions/programming', 'CompetitionController@programming');

Route::get('/events', 'EventController@index');
Route::get('/events/seminar', 'EventController@semnas');

Route::get('/competitions/internal', 'CompetitionController@internalCompetition');
Route::get('/competitions/internal/informatics-smart', 'CompetitionController@informaticsSmart');
Route::get('/competitions/internal/futsal', 'CompetitionController@futsal');
Route::get('/competitions/internal/basket', 'CompetitionController@basket');
Route::get('/competitions/internal/badminton', 'CompetitionController@badminton');
Route::get('/competitions/internal/tenis-meja', 'CompetitionController@tenisMeja');
Route::get('/competitions/internal/catur', 'CompetitionController@catur');
Route::get('/competitions/internal/dota-2', 'CompetitionController@dota');
Route::get('/competitions/internal/pes-2016', 'CompetitionController@pes');
Route::get('/competitions/internal/counter-strike', 'CompetitionController@counterStrike');
Route::get('/competitions/internal/rubik-cube-3x3', 'CompetitionController@rubikCube');
Route::get('/competitions/internal/desain-logo', 'CompetitionController@desainLogo');
Route::get('/competitions/internal/fotografi', 'CompetitionController@fotografi');
Route::get('/competitions/internal/insta-video', 'CompetitionController@instaVideo');

Route::get('auth/login', [
    'as'   => 'auth.login',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
    'as'   => 'auth.doLogin',
    'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/register', [
    'as'   => 'auth.register',
    'uses' => 'Auth\AuthController@getRegistration'
]);

Route::post('auth/register', [
    'as'   => 'auth.doRegister',
    'uses' => 'Auth\AuthController@postRegistration'
]);

Route::get('auth/logout', [
    'as'   => 'auth.logout',
    'uses' => 'Auth\AuthController@getLogout'
]);

Route::get('auth/emails/verify/{code}', [
    'as'   => 'auth.emails.verify',
    'uses' => 'Auth\AuthController@verifyEmailActivationCode'
]);

Route::group(['middleware' => 'auth'], function ()
{
    Route::group(['middleware' => 'role:admin', 'prefix' => 'dashboard/protected'], function ()
    {
        Route::get('/', [
            'as'   => 'dashboard.admin',
            'uses' => 'Dashboard\DashboardController@admin'
        ]);
        Route::get('users/settings', [
            'as'   => 'admin.setting',
            'uses' => 'Dashboard\Admin\UserManagementController@setting'
        ]);
        Route::get('users/registered-on-this-day', [
            'as'   => 'dashboard.protected.users.usersOnThatDay',
            'uses' => 'Dashboard\Admin\UserManagementController@usersOnThatDay'
        ]);
        Route::get('users/verified', [
            'as'   => 'dashboard.protected.users.verified',
            'uses' => 'Dashboard\Admin\UserManagementController@verifiedUsers'
        ]);
        Route::get('users/not-verified', [
            'as'   => 'dashboard.protected.users.notVerified',
            'uses' => 'Dashboard\Admin\UserManagementController@notVerifiedUsers'
        ]);
        Route::get('users/getUsersOnThatDay', [
            'as'   => 'dashboard.protected.users.getUsersOnThatDay',
            'uses' => 'Dashboard\Admin\UserManagementController@getUsersOnThatDay'
        ]);
        Route::get('users/getVerifiedUsers', [
            'as'   => 'dashboard.protected.users.getVerified',
            'uses' => 'Dashboard\Admin\UserManagementController@getVerifiedUsers'
        ]);
        Route::get('users/getNotVerifiedUsers', [
            'as'   => 'dashboard.protected.users.getNotVerified',
            'uses' => 'Dashboard\Admin\UserManagementController@getNotVerifiedUsers'
        ]);
        Route::put('users/makeVerified/{user_categories}', [
            'as'   => 'dashboard.protected.users.verifyUserByCategory',
            'uses' => 'Dashboard\Admin\UserManagementController@verifyUserByCategory'
        ]);
        Route::put('users/makeUnverified/{user_categories}', [
            'as'   => 'dashboard.protected.users.unverifyUserByCategory',
            'uses' => 'Dashboard\Admin\UserManagementController@unverifyUserByCategory'
        ]);
        Route::delete('users/{user_categories}', [
            'as'   => 'dashboard.protected.users.destroy',
            'uses' => 'Dashboard\Admin\UserManagementController@destroy'
        ]);
        Route::resource('users', 'Dashboard\Admin\UserManagementController');
        Route::resource('competitions', 'Dashboard\Admin\CategoryController');
        Route::resource('galleries', 'Dashboard\Admin\GalleryController');
    });

    Route::group(['middleware' => 'role:user', 'prefix' => 'dashboard'], function ()
    {
        Route::get('/', [
            'as'   => 'dashboard.user',
            'uses' => 'Dashboard\DashboardController@user'
        ]);
        Route::get('users/settings', [
            'as'   => 'user.setting',
            'uses' => 'Dashboard\User\UserController@setting'
        ]);
        Route::resource('users', 'Dashboard\User\UserController');
        Route::resource('members', 'Dashboard\User\TeamMemberController');
        Route::resource('images', 'Dashboard\User\ImageController');
        Route::get('competitions', 'Dashboard\User\CompetitionRegistrationController@index');
        Route::get('competitions/register', 'Dashboard\User\CompetitionRegistrationController@register');
        Route::post('competitions/register', 'Dashboard\User\CompetitionRegistrationController@postRegister');
        Route::get('competitions/requirements', 'Dashboard\User\CompetitionRegistrationController@addCompetitionRequirements');
        Route::post('competitions/requirements', 'Dashboard\User\CompetitionRegistrationController@postCompetitionRequirements');
    });
});
