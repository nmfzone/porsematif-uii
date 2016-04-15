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

    <table class="table table-condensed the-tables" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Universitas</th>
                <th>Jam Mendaftar</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

</div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('dashboard.protected.users.getUsers') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'username', name: 'username' },
                    { data: 'email', name: 'email' },
                    { data: 'institution_name', name: 'institution_name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '300px' }
                ]
            });
        });
    </script>
@endsection
