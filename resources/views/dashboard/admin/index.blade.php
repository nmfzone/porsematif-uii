@extends('layouts.admin_dashboard')

@section('stylesheets')
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="row row-centered">
        <div class="col-lg-3 col-md-6 col-centered">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ UserMan::userRegisterTodayCount()  }}</div>
                            <div>Pendaftar hari ini!</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('dashboard.protected.users.usersOnThatDay') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-centered">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ UserMan::verifiedUserCount()  }}</div>
                            <div>Registrasi Selesai!</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('dashboard.protected.users.verified') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-centered">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-shopping-cart fa-4x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">{{ UserMan::notVerifiedUserCount() }}</div>
                            <div>Registrasi Belum Selesai!</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('dashboard.protected.users.notVerified') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
