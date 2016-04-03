@extends('dashboard.user.members._member_form')

@section('input_nim')
    <input type="text" class="form-control" name="nim" value="{{ old('nim') }}">
@endsection

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
@endsection

@section('input_email')
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
@endsection

@section('input_generation')
    <input type="text" class="form-control" name="generation" value="{{ old('generation') }}">
@endsection

@section('input_phone')
    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
@endsection

@section('input_position')
    @foreach($positions as $position)
        <option value="{{ $position['name'] }}">{{ $position['name'] }}</option>
    @endforeach
@endsection

@section('submit_message')
    Tambah Anggota
@endsection
