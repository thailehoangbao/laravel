@extends('layouts.app')
@section('content')
<h1>Update Food Pages</h1>
<form action="{{ route('foods.update', ['food' => $food->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control">
        <label for="name">Name</label>
        <input value="{{$food->name}}" type="text" name="name" id="name" placeholder="name">
    </div>
    <div class="form-control">
        <label for="description">Description</label>
        <input value="{{$food->description}}" type="text" name="description" id="description" placeholder="Nhập mô tả">
    </div>
    <div class="form-control">
        <label for="description">Count</label>
        <input value="{{$food->count}}" type="text" name="count" id="count" placeholder="nhập số lượng">
    </div>
    <button type="submit" class="btn-primary">Update</button>
</form>
@endsection
