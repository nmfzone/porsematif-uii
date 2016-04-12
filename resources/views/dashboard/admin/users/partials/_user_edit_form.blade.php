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

@section('input_institution_name')
    <input type="text" class="form-control" name="institution_name" value="{{ $user->institution_name }}">
@endsection

@section('input_institution_address')
    <input type="text" class="form-control" name="institution_address" value="{{ $user->institution_address }}">
@endsection

@section('input_status')
    <input type="text" class="form-control" name="status" value="{{ $user->status }}">
@endsection

@section('input_category')
    @foreach($competitions as $competition)
        @if(in_array($competition->id, $registered_competitions))
            <div class="checkbox">
                <label><input type="checkbox" name="competition[]" checked value="{{ $competition->id }}">{{ $competition->name }}</label>
            </div>
        @else
            <div class="checkbox">
                <label><input type="checkbox" name="competition[]" value="{{ $competition->id }}">{{ $competition->name }}</label>
            </div>
        @endif
    @endforeach
@endsection

@section('optional')
    <input type="hidden" name="setting" value="{{ $setting }}">
@endsection

@section('submit_message')
    Edit User
@endsection
