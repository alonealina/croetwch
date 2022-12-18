@extends('layouts.app')

@section('page_name')
COMPANY PROFILE
@endsection


@section('content')
<div class="content">
    <div class="company_div">
        <div class="company_column">
            <div class="company_left">会社名 / Company</div>
            <div class="company_right">株式会社CROWTECH / CROWTECH co;ltd</div>
        </div>
        <div class="company_column">
            <div class="company_left">住所 / Address</div>
            <div class="company_right">
                〒540-0038<br>
                大阪府大阪市中央区内淡路町2-4-10グランダム内淡路201<br>
                Grandum-Uchiawaji201, Uchiawajimachi,<br>
                Osaka Shi Chuo ku, Osaka Fu
            </div>
        </div>
        <div class="company_column">
            <div class="company_left">TEL</div>
            <div class="company_right">06-6484-6013 / +81-6-6484-6013</div>
        </div>
        <div class="company_column">
            <div class="company_left">FAX</div>
            <div class="company_right">06-0484-6014 / +81-6-0484-6014</div>
        </div>
        <div class="company_column">
            <div class="company_left">MAIL</div>
            <div class="company_right">info@crowtech.jp</div>
        </div>
        <div class="company_column">
            <div class="company_left">取引銀行 / Bank</div>
            <div class="company_right">GMOあおぞらネット銀行 / GMOaozoranet bank</div>
        </div>
        <div class="company_column">
            <div class="company_left">設立日 / Founding Date</div>
            <div class="company_right">2021年12月 / Desenber/2021</div>
        </div>
    </div>
</div>

<div class="bg_div about_bg"></div>
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