@extends('layouts.user_dashboard')

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
        @foreach($users as $key => $user)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role->name }}</td>
                <td class="text-center"><a href="{{ url('/dashboard/users/' . $user->id . '/edit') }}" class="btn btn-warning">Edit</a></td>
                <td class="text-center"><a href="{{ url('/dashboard/users/' . $user->id) }}" data-delete="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>

    {!! $users->render() !!}
</div>
@endsection
