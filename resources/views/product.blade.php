@extends('layouts.app')

@section('page_name')
Product viewer
@endsection


@section('content')
<div class="content">
    <img src="{{ asset('img/product.png') }}" class="product_img" alt="">
    <div class="product_text">under constrution</div>
</div>

<div class="bg_div" style="background: #000;"></div>
@endsection


@section('content_sp')

<div class="wrapper">
    <ul class="slider">
        <li class="slider-item slider-item01_sp"></li>
        <li class="slider-item slider-item02_sp"></li>
        <li class="slider-item slider-item03_sp"></li>
    </ul>
</div>

<a class="sp_top_logo" href="{{ route('index') }}" id="sp_top_logo">
    <img src="{{ asset('img/sp_top_logo.png') }}" class="sp_top_img" alt="">
</a>

@endsection