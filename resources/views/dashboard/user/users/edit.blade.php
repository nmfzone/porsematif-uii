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
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/users/' . $user->id) }}">

            {{ method_field('PUT') }}
            @include('dashboard.user.users._user_form_edit')

        </form>
    </div>
</div>
@endsection
