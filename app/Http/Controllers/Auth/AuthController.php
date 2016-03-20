<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Message;
use App\User;
use App\Category;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\Auth\UserRegistrationRequest;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
     */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Use username field instead of email
     */
    protected $username = 'username';

    /**
     * The loader implementation.
     *
     * @var \App\Services\MessagesTranslator
     */
    protected $message;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->message = $message->setBase('messages.ctrl.auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'name' => 'required|max:255',
            'email' => 'email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Change laravel default login form location.
     */
    public function getLogin()
    {
        $options = [
            'title' => "Login Area"
        ];

        return view('auth.login')->with($options);
    }

    public function getRegistration(Category $category)
    {
        $competitions = $category->orderBy('id')->get();
        $options = [
            'title' => "Registrasi"
        ];

        return view('auth.register', compact('competitions', 'options'));
    }

    public function postRegistration(UserRegistrationRequest $request, User $user)
    {
        $newUser = $user->newInstance($request->except(['competition', 'g-recaptcha-response', 'accept_terms']));
        $newUser->role_id = 2;
        $newUser->category_id = $request->get('competition');
        $newUser->save();

        $credentials = [
            'username'  => $request->get('username'),
            'password'  => $request->get('password')
        ];

        Auth::attempt($credentials);

        alert()->success($this->message->shout('registration.success'))->persistent("Close");

        return redirect('/dashboard');
    }

    public function redirectPath()
    {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            return 'dashboard/protected';
        } else if ($user->hasRole('user')) {
            return 'dashboard';
        }

        return $this->redirectTo;
    }

}
