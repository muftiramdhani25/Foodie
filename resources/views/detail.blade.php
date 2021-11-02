@extends('layout.base')
@section('title', 'Detail')
@section('style', '/css/detail.css')

@section('content')
<section class="detail">
    <a href="{{route('home')}}"><img src="{{asset('asset/icon-back.svg')}}"></a>
    <h1><span>Detail</span> Section</h1>
    <div class="wrap">
        <img src="{{$food['picture_url']}}">


        @component('layout.desc')
        <h2>{{$food['title']}}</h2>
        <div class="capsule">
            @foreach($food['categories'] as $category)
            <p>{{$category}}</p>
            @endforeach
        </div>
        <p class="description">{{$food['description']}}</p>
        <p class="price">Cuma Rp. {{$food['base_price']}}</p>
        <a href="" onclick="thanksAlert()">Order Now</a>
        @endcomponent

    </div>
</section>
@endsection