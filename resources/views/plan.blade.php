@extends('layouts.app')

@section('page_name')
Planning
@endsection


@section('content')
<div class="content">
    <div class="work_column" id="work_column1">Promorion Planning</div>
    <div class="work_column" id="work_column2">Business Planning</div>
    <div class="work_text">
    多くのパートナー企業と仕事を一緒に行っています。<br>
    その結果我々の周辺には多くのエキスパートが揃っています。<br>
    宣伝やマーケティング、貿易や販売、飲食店の経営やファッション分野など。<br>
    私たちは各分野における貴社にとっての企画パートナーになることが出来ます。<br>
    より多くの経験と知識を弊社は求めています。<br>
    ぜひ新しい挑戦を貴社とさせていただきたいと思います。<br>
    もちろん弊社のメンバーが貴社のビジョンを理解し安心できる企画立案や<br>
    マーケティングをサポートします。<br><br>
    We work with many partner companies. As a result,<br>
    we have many experts around us. Advertising and marketing,<br>
    trade and sales, restaurant management and fashion.<br>
    We can be a planning partner for your company in each field.<br>
    We are looking for more experience and knowledge.<br>
    I would like to take on a new challenge with your company.<br>
    Of course, our members understand your company's vision and support planning<br>
    and marketing that you can feel secure about.
    </div>
</div>

<div class="bg_div plan_bg"></div>
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