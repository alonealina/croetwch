@extends('layouts.app')

@section('page_name')
Web creation
@endsection


@section('content')
<div class="content">
    <div class="work_column" id="work_column1">Web Design</div>
    <div class="work_column" id="work_column2">UI/UX Design</div>
    <div class="work_text">
    ホームページやスマートフォンサイトなどのWEB制作を提供します。<br>
    現代の情報伝達はWeb通信を主要な方法としており、<br>
    サービスや商品を消費者に認知させて購入などのアクションを促すには<br>
    Webサイトのクオリティーが重要です。単純に見やすくて使いやすい<br>
    ホームページが良いのでは無く、消費者の行動を喚起させるような<br>
    仕掛けがされている事が重要であると我々は考えています。<br>
    私たちが作るWebは貴社にとっての重要な武器になる事が<br>
    最大のミッションであります。<br><br>
    We provide web production such as homepages and smartphone sites.<br>
    Web communication is the main method of modern information transmission,<br>
    and the quality of the website is important to make consumers aware<br>
    of services and products and to encourage actions such as purchases.<br>
    We believe that it is important not to simply have a website that is easy to see and use,<br>
    but that it is important to have a mechanism that arouses consumer action.<br>
    Our biggest mission is to make the web we create an important weapon for your company.
    </div>
</div>

<div class="bg_div web_bg"></div>
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