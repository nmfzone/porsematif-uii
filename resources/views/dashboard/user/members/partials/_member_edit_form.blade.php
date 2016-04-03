@extends('dashboard.user.members._member_form')

@section('input_nim')
    <input type="text" class="form-control" name="nim" value="{{ $teamMember->nim }}">
@endsection

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ $teamMember->name }}">
@endsection

@section('input_email')
    <input type="email" class="form-control" name="email" value="{{ $teamMember->email }}">
@endsection

@section('input_generation')
    <input type="text" class="form-control" name="generation" value="{{ $teamMember->generation }}">
@endsection

@section('input_phone')
    <input type="text" class="form-control" name="phone" value="{{ $teamMember->phone }}">
@endsection

@section('input_position')
    @foreach($positions as $position)
        @if ($position['name'] == $teamMember->position)
            <option value="{{ $position['name'] }}" selected>{{ $position['name'] }}</option>
        @else
            <option value="{{ $position['name'] }}">{{ $position['name'] }}</option>
        @endif
    @endforeach
@endsection

@section('submit_message')
    Edit Anggota
@endsection
