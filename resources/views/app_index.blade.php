@extends('layout.base')
@section('style', '/css/style.css')

@section('content')
    @include('home')

    @include('catalog')
@endsection