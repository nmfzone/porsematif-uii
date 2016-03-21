<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
use App\User;
use App\Message;
Route::get('/test-coba/{id}', function(User $user) {
    $messages = $user->message();

    dd($messages);
});

Route::get('/', 'HomeController@index');

Route::get('/competitions', 'CompetitionController@index');
Route::get('/competitions/terms', 'CompetitionController@terms');
Route::get('/competitions/web-development', 'CompetitionController@webDev');
Route::get('/competitions/programming', 'CompetitionController@programming');

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
        Route::resource('users', 'Dashboard\Admin\UserManagementController');
        Route::resource('categories', 'Dashboard\CategoryController');
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

        Route::get('pendaftaran', 'Dashboard\User\PendaftaranController@index');
        Route::post('pendaftaran', 'Dashboard\User\PendaftaranController@store');
    });
});
