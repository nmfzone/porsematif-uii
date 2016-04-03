@extends('layouts.admin_dashboard')

@section('meta')
    <meta name="token" content="{{ csrf_token() }}">
@endsection

@section('stylesheets')
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page_header')
    <h1 class="page-header">{{ $pageTitle }}</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/dashboard/protected/galleries') }}">

            @include('dashboard.admin.galleries._uploads_form')

        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 galleries-upload">
        <form class="form-horizontal" role="form" method="POST" action="#">

            @include('dashboard.admin.galleries._view_form')

        </form>
    </div>
</div>
<div class="bottomExtraSpace"></div>
@endsection
