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

    <table class="table table-condensed the-tables" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Kategori</th>
                <th>Universitas</th>
                <th>Tgl Mendaftar</th>
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
                ajax: '{!! route('dashboard.protected.users.getVerified') !!}',
                columns: [
                    { data: 'id', name: 'id', visible: false },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'user.email', name: 'user.email' },
                    { data: 'category.name', name: 'category.name' },
                    { data: 'user.institution_name', name: 'user.institution_name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '300px' }
                ]
            });
        });
    </script>
@endsection
