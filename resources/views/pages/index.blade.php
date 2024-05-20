@extends('layouts.app')
@section('content')
    <h1>Index Pages</h1>
    {{ print_r(asset('storage/app/public/ip15.webp')) }}
    <img src="{{  asset('storage/ip15.webp') }}" width="100" height="100" alt=""/>
@endsection

