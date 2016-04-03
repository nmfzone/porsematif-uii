<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Awesome\Contracts\Controllers\DashboardContract;

use App\User;
use App\Category;
use App\UserCategory;

// class DashboardController extends Controller implements DashboardContract
class DashboardController extends Controller
{

    private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Display the dashboard welcome page to the Administrator.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('dashboard.admin.index');
    }

    /**
     * Display the dashboard welcome page to the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function user(Category $category)
    {
        $competition = $this->user->user_category()->first();
        $competition_details = $this->user->user_category()->orderBy('verified', 'desc')->orderBy('category_id')->get();

        return view('dashboard.user.index', compact('competition', 'competition_details', 'category'));
    }


}
