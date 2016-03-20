@extends('dashboard.admin.spareparts._sparepart_form')

@section('input_username')
    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
@endsection

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
@endsection

@section('input_email')
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
@endsection

@section('input_role')
    @foreach($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
    @endforeach
@endsection

@section('submit_message')
    Tambah User
@endsection
