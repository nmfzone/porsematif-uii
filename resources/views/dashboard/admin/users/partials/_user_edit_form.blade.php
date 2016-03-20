@extends('dashboard.admin.users._user_form')

@section('input_username')
    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
@endsection

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
@endsection

@section('input_email')
    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
@endsection

@section('input_role')
    @foreach($roles as $role)
        @if ($role->id == $user->role->id)
            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
        @else
            <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endif
    @endforeach
@endsection

@section('optional')
    <input type="hidden" name="setting" value="{{ $setting }}">
@endsection

@section('submit_message')
    Edit User
@endsection
