@extends('layouts.app')

@section('page_name')
Recruit
@endsection


@section('content')
<div class="content">
    

</div>

<div class="bg_div top_bg"></div>
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