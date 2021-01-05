@extends('layouts.main')
@section('title','Головна')
@section('content')
@if(session()->has('success'))
    <p>{{session()->get('success')}}</p>
@endif
<div class="uk-position-relative uk-visible-toggle  uk-light uk-slideshow"  uk-slideshow="autoplay: true; autoplay-interval: 3000;" uk-slideshow="min-height: 300; max-height: 600" uk-slideshow="animation: push">

<ul class="uk-slideshow-items" style="min-height: 600px;">
    <li class="" style="" tabindex="-1">
        <img src="/images/1-Slide.jpg" alt="" uk-cover="" class="uk-cover" >
        <div class="uk-overlay uk-position-center"> <p style="font-size:8rem;font-weight: 600;">Tech Space</p></div>
    </li>
    <li tabindex="-1" class="" style="">
        <img src="/images/2-Slide.jpg" alt="" uk-cover="" class="uk-cover" >
        <div class="uk-overlay uk-position-center"><p style="font-size:8rem;font-weight: 600;">це.</p></div>
    </li>
    <li tabindex="-1" class="" style="">
        <img src="/images/3-Slide.jpg" alt="" uk-cover="" class="uk-cover" >
        <div class="uk-overlay uk-position-center"> <p style="font-size:8rem; font-weight: 600;">твiй.</p></div>
    </li>
    <li tabindex="-1" class="" style="">
        <img src="/images/4-Slide.jpg" alt="" uk-cover="" class="uk-cover" >
        <div class="uk-overlay uk-position-center"><p style="font-size:8rem;font-weight: 600;">iнтернет-магазин.</p></div>
    </li>
    <li tabindex="-1" class="" style="">
        <img src="/images/5-Slide.jpg" alt="" uk-cover="" class="uk-cover">
        <div class="uk-overlay uk-position-center"> <p style="font-size:8rem;font-weight: 600;">майбутнього.</p></div>
    </li>
</ul>

<a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav" href="#" uk-slidenav-previous="" uk-slideshow-item="previous"></a>
<a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav" href="#" uk-slidenav-next="" uk-slideshow-item="next"></a>

</div>

@endsection