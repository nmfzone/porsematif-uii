@extends('layouts.user_dashboard')

@section('stylesheets')
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page_header')
    <h1 class="page-header">{{ $pageTitle }}</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/dashboard/pendaftaran') }}">

            @include('dashboard.user.pendaftaran._pendaftaran_form_create')

        </form>
    </div>
</div>
@endsection
