@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content internalCompetition row-centered text-center">
        <h3 class="title">Internal Competitions</h3>

        <div class="col-md-12">
            <a href="{{ url('competitions/internal/informatics-smart') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-book"></i><br>
                    Informatics Smart
                </div>
            </a>
            <a href="{{ url('competitions/internal/futsal') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-futbol-o"></i><br>
                    Futsal
                </div>
            </a>
            <a href="{{ url('competitions/internal/basket') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-futbol-o"></i><br>
                    Basket
                </div>
            </a>
        </div>

        <div class="col-md-12">
            <a href="{{ url('competitions/internal/badminton') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-futbol-o"></i><br>
                    Badminton
                </div>
            </a>
            <a href="{{ url('competitions/internal/tenis-meja') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-futbol-o"></i><br>
                    Tenis Meja
                </div>
            </a>
            <a href="{{ url('competitions/internal/catur') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-futbol-o"></i><br>
                    Catur
                </div>
            </a>
        </div>

        <div class="col-md-12">
            <a href="{{ url('competitions/internal/dota-2') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-gamepad"></i><br>
                    Dota 2
                </div>
            </a>
            <a href="{{ url('competitions/internal/pes-2016') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-gamepad"></i><br>
                    PES 2016
                </div>
            </a>
            <a href="{{ url('competitions/internal/counter-strike') }}">
                <div class="col-md-3 col-centered">
                    <i class="fa fa-gamepad"></i><br>
                    Counter Strike
                </div>
            </a>
        </div>

        <div class="col-md-12">
            <a href="{{ url('competitions/internal/rubik-cube-3x3') }}">
                <div class="col-md-2 col-centered">
                    <i class="fa fa-gamepad"></i><br>
                    Rubik Cube 3x3
                </div>
            </a>
            <a href="{{ url('competitions/internal/desain-logo') }}">
                <div class="col-md-2 col-centered">
                    <i class="fa fa-paint-brush"></i><br>
                    Desain Logo
                </div>
            </a>
            <a href="{{ url('competitions/internal/fotografi') }}">
                <div class="col-md-2 col-centered">
                    <i class="fa fa-paint-brush"></i><br>
                    Fotografi
                </div>
            </a>
            <a href="{{ url('competitions/internal/insta-video') }}">
                <div class="col-md-2 col-centered">
                    <i class="fa fa-paint-brush"></i><br>
                    Insta Video
                </div>
            </a>
        </div>
    </div>

@endsection
