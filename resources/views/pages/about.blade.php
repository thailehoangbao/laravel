@extends('layouts.app')
@section('content')
    <p>This is the about page</p>
    {{--
    {{ $x = 11; }}
    @if ($x > 10 )
        <p> true </p>
    @elseif($x < 10)
        <p> false </p>
    @else
        <p> equal </p>
    @endif
    {{ $name }}
    @if(!empty($name))
        <p> Name is not empty </p>
    @endif
    @if(empty($name))
        <p> Name is empty </p>
    @empty($age)
        <p> Age is empty </p>
    @endempty
    @isset($name)
        <p> Name has been set </p>
    @endisset
    @switch($name)
        @case('John')
            <p> Name is John </p>
            @break
        @case('Jane')
            <p> Name is Jane </p>
            @break
        @default
            <p> Name is unknown </p>
    @endswitch
    @for($i = 0; $i < 10; $i++)
        <p>{{ $i }}</p>
    @endfor
    @foreach($names as $name)
        <p>{{ $name }}</p>
    @endforeach
    {{ $i=0 }}
    @while($i < 10)
        <p>i= {{ $i }}</p>
        {{ $i++ }}
    @endwhile
    --}}
    
@endsection
