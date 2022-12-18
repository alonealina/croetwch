@extends('layouts.app')

@section('page_name')
Recruit
@endsection


@section('content')
<div class="content">
    <div class="top_text1">
    Even if we are hated,<br>we need to exist to design<br>something new.
    </div>
    <div class="top_text2">
    Our goal is to discover<br>something beyond black.<br>IT EVEN HAS WINGS TO FLY.
    </div>

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