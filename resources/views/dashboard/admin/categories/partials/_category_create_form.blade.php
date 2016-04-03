@extends('dashboard.admin.categories._category_form')

@section('input_name')
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
@endsection

@section('type')
    <option value="External">Kompetisi External</option>
    <option value="Internal">Kompetisi Internal</option>
@endsection

@section('submit_message')
    Tambah Kompetisi
@endsection
