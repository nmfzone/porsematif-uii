<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompetitionController extends Controller
{

    public function index()
    {
        return redirect('/');
    }

    public function terms()
    {
        return view('competitions.terms');
    }

    public function webDev()
    {
        return view('competitions.webdev');
    }

    public function programming()
    {
        return view('competitions.programming');
    }

}
