<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display events home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Display Seminar Nasional events page.
     *
     * @return \Illuminate\Http\Response
     */
    public function semnas()
    {
        $pageTitle = "Seminar";
        return view('events.semnas', compact('pageTitle'));
    }
}
