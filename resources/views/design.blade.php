@extends('layouts.app')

@section('page_name')
Design
@endsection


@section('content')
<div class="content">
    <div class="work_column" id="work_column1">VI Design</div>
    <div class="work_column" id="work_column2">CI Design</div>
    <div class="work_column" id="work_column3">Graphic Design</div>
    <div class="work_column" id="work_column4">Space Design</div>
    <div class="work_text">
    様々な分野でのデザインを作成し提供しています。<br>
    クライアントの要望をデザインで表現することも重要ですが、<br>
    よれよりもデザインを見る人たちに与える印象をいかに<br>
    クリエイトできるか？という意識でデザインをしています。<br>
    言葉にするのは簡単ですが、コミュニケーションツールとして<br>
    デザインはあるべきであると考えています。<br>
    少しでも何かを前進させされるようなデザインワークをご提供します。<br><br>
    We create and deliver designs in various fields.<br>
    It is important to express the client's request in the design,<br>
    but more importantly, how can we create the impression<br>
    that the design gives to the people who see it? I am designing<br>
    with this in mind. It's easy to put into words, but I believe<br>
    that design should be a communication tool.<br>
    We provide design work that can move something forward even a little.
    </div>
</div>

<div class="bg_div design_bg"></div>
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