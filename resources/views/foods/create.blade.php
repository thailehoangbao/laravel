@extends('layouts.app')
@section('content')
<h1>Index Create Food Pages</h1>
<form action="/foods" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-control">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="name">

    </div>
    <div class="form-control">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Nhập mô tả">

    </div>
    <div class="form-control">
        <label for="description">Count</label>
        <input type="text" name="count" id="count" placeholder="nhập số lượng">

    </div>
    <div>
        <h5>Select Categories</h5>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-control">
        <label for="file">UploadFile</label>
        <input type="file" name="image" id="file" placeholder="Input File Image">

    </div>
    <button type="submit" class="btn-primary">Submit</button>
</form>
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection
