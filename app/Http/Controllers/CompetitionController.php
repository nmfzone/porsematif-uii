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
        $pageTitle = "Terms";
        return view('competitions.terms', compact('pageTitle'));
    }

    public function webDev()
    {
        $pageTitle = "Web Development Competition";
        return view('competitions.webdev', compact('pageTitle'));
    }

    public function programming()
    {
        $pageTitle = "Programming Competition";
        return view('competitions.programming', compact('pageTitle'));
    }

    public function internalCompetition()
    {
        $pageTitle = "Internal Competition";
        return view('competitions.internalCompetition', compact('pageTitle'));
    }

    public function informaticsSmart()
    {
        $pageTitle = "Informatics Smart";
        return view('competitions.informaticsSmart', compact('pageTitle'));
    }

    public function futsal()
    {
        $pageTitle = "Futsal";
        return view('competitions.futsal', compact('pageTitle'));
    }

    public function basket()
    {
        $pageTitle = "Basket";
        return view('competitions.basket', compact('pageTitle'));
    }

    public function badminton()
    {
        $pageTitle = "Badminton";
        return view('competitions.badminton', compact('pageTitle'));
    }

    public function tenisMeja()
    {
        $pageTitle = "Tenis Meja";
        return view('competitions.tenisMeja', compact('pageTitle'));
    }

    public function catur()
    {
        $pageTitle = "Catur";
        return view('competitions.catur', compact('pageTitle'));
    }

    public function dota()
    {
        $pageTitle = "Dota 2";
        return view('competitions.dota', compact('pageTitle'));
    }

    public function pes()
    {
        $pageTitle = "PES 2016";
        return view('competitions.pes', compact('pageTitle'));
    }

    public function counterStrike()
    {
        $pageTitle = "Counter Strike";
        return view('competitions.counterStrike', compact('pageTitle'));
    }

    public function rubikCube()
    {
        $pageTitle = "Rubik Cube";
        return view('competitions.rubikCube', compact('pageTitle'));
    }

    public function desainLogo()
    {
        $pageTitle = "Desain Logo";
        return view('competitions.desainLogo', compact('pageTitle'));
    }

    public function fotografi()
    {
        $pageTitle = "Fotografi";
        return view('competitions.fotografi', compact('pageTitle'));
    }

    public function instaVideo()
    {
        $pageTitle = "Insta Video";
        return view('competitions.instaVideo', compact('pageTitle'));
    }

}
