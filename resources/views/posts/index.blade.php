@extends('layouts.app')
@section('content')
    <h1>Index Post Pages</h1>
    @foreach($records as $post)
        <div class="card">
            <div class="card-header">
                <a href="">{{ $post->title }}</a>
            </div>
            <div class="card-body">
                <p>{{ $post->body }}</p>
            </div>
            <div>
                <p>CreatedAt: {{$post->created_at}}</p>
                <p>UpdatedAt: {{$post->updated_at}}</p>
            </div>
        </div>
    @endforeach
@endsection
