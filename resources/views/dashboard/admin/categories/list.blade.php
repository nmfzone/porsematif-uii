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
    <table class="table table-striped the-tables">
        <tr>
            <th>#</th>
            <th>Nama Kompetisi</th>
            <th>Tipe Kompetisi</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
        @foreach($categories as $key => $category)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->type }}</td>
                <td class="text-center"><a href="{{ url('/dashboard/protected/competitions/' . $category->id . '/edit') }}" class="btn btn-warning">Edit</a></td>
                <td class="text-center"><a href="{{ url('/dashboard/protected/competitions/' . $category->id) }}" class="btn btn-danger delete-this">Delete</a></td>
            </tr>
        @endforeach
    </table>

    {!! $categories->render() !!}
</div>
@endsection
