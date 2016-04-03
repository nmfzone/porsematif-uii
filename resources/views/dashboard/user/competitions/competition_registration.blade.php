@extends('layouts.user_dashboard')

@section('stylesheets')
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page_header')
    <h1 class="page-header">{{ $pageTitle }}</h1>
@endsection

@section('content')
<div class="row row-centered">
    <div class="col-md-12 register-competition">
        <h2>Silahkan Pilih Kompetisi</h2>
        <h5>Kompetisi Internal hanya diperuntukkan bagi Mahasiswa Informatika UII</h5>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/competitions/register') }}">

            @include('dashboard.user.competitions._competition_registration_form')

        </form>
    </div>
</div>
@endsection
