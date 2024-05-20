@extends('layouts.app')
@section('content')
    <h1>Detail Food Pages</h1>
    <p>Food Name: {{ $food->name }}</p>
    <p>Food Description: {{ $food->description }}</p>
    <p>Food Count: {{ $food->count }} $</p>
    <p>Loại Món Ăn: {{$category->name}}</p>
    <p>Đánh giá Món An: {{$category->description}}</p>
    <img src="{{asset('images/'.$food->image_path)}}" alt="" width="100" height="100">
@endsection
