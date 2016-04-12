@extends('dashboard.admin.users._user_form')

@section('input_username')
    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
@endsection

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
@endsection

@section('input_email')
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
@endsection

@section('input_institution_name')
    <input type="text" class="form-control" name="institution_name" value="{{ old('institution_name') }}">
@endsection

@section('input_institution_address')
    <input type="text" class="form-control" name="institution_address" value="{{ old('institution_address') }}">
@endsection

@section('input_status')
    <input type="text" class="form-control" name="status" value="{{ old('status') }}">
@endsection

@section('input_category')
    @foreach($competitions as $competition)
        <div class="checkbox">
            <label><input type="checkbox" name="competition[]" value="{{ $competition->id }}">{{ $competition->name }}</label>
        </div>
    @endforeach
@endsection

@section('submit_message')
    Tambah User
@endsection
