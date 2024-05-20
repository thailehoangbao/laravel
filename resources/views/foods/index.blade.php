@extends('layouts.app')
@section('content')
    <h1>Index Food Pages</h1>
    <a href="foods/create" >Add new Food</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Count</th>
            <th>Action</th>
        </tr>
        @foreach($foods as $food)
            <tr>
                <td>
                    <a href="/foods/{{ $food->id }}">{{$food->name}}</a>
                </td>
                <td>{{$food->description}}</td>
                <td>{{$food->count}}</td>
                <td>
                    <a href="/foods/{{$food->id}}/edit">Edit</a>
                    <form action="/foods/{{$food->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
@endsection
