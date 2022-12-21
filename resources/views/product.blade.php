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

<div class="content">
    <img src="{{ asset('img/product_sp.png') }}" class="product_img_sp" alt="">
    <div class="product_text">under constrution</div>
</div>

<div class="bg_div" style="background: #000;"></div>

@endsection