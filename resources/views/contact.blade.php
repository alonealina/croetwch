@extends('layouts.app')

@section('page_name')
CONTACT
@endsection


@section('content')
<div class="content">
    <div class="contact_div">
        <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="contact_flex">
                <div class="contact_name">Name</div>
                <input class="form_text" placeholder="" name="name" type="text" id="name">
            </div>

            <div class="contact_flex">
                <div class="contact_name">Phone number</div>
                <input class="form_text" placeholder="" name="tel" type="text" id="tel">
            </div>

            <div class="contact_flex">
                <div class="contact_name">E-mail</div>
                <input class="form_text" placeholder="" name="mail" type="text" id="mail">
            </div>

            <div class="contact_flex">
                <div class="contact_name">Message</div>
                <textarea class="form_textarea" name="content" id="content"></textarea>
            </div>
            <div class="contact_flex">
                <div class=""></div>
                <div class="error_message" id="error_message"></div>
            </div>

            <div class="send_button">
                <a href="#" onclick="clickMailButton()">SEND</a>
            </div>
        </form>
    </div>
</div>

<div class="bg_div about_bg"></div>
<script src="{{ asset('js/contact.js') }}"></script>

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