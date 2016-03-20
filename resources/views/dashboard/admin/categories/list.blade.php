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

    @include('layouts._flash')

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Name</th>
            <th>Role</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
        @foreach($spareparts as $key => $sparepart)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $sparepart->username }}</td>
                <td>{{ $sparepart->name }}</td>
                <td>{{ $sparepart->role->name }}</td>
                <td class="text-center"><a href="{{ url('/dashboard/spareparts/' . $sparepart->id . '/edit') }}" class="btn btn-warning">Edit</a></td>
                <td class="text-center"><a href="{{ url('/dashboard/spareparts/' . $sparepart->id) }}" data-delete="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>

    {!! $spareparts->render() !!}
</div>
@endsection
