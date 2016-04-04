@extends('dashboard.admin.categories._category_form')

@section('input_name')
    <input type="text" class="form-control" name="name" value="{!! $category->name !!}">
@endsection

@section('input_price')
    <input type="text" class="form-control" name="price" value="{!! $category->price !!}">
@endsection

@section('type')
    @if($category->type == "External")
        <option value="External" selected>Kompetisi External</option>
    @else
         <option value="External">Kompetisi External</option>
    @endif
    @if($category->type == "Internal")
        <option value="Internal" selected>Kompetisi Internal</option>
    @else
        <option value="Internal">Kompetisi Internal</option>
    @endif
@endsection

@section('submit_message')
    Edit Kompetisi
@endsection
