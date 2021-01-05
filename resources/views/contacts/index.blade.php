@extends('layouts.main')
@section('title', 'Контакти')
@section('content')

<div class="uk-cover-container uk-height-medium">
    <img src="images/contacts.jpg" alt="" uk-cover>
    <div class="uk-overlay uk-light uk-position-center">
        <p1 style="color: white; opacity: 1;font-size:5rem;font-weight: 600;">Контакти</p>
    </div>
</div>
<div class="uk-flex uk-flex-row uk-flex-center uk-section-muted">
    <div class="uk-section-default uk-margin-medium-bottom uk-margin-medium-top uk-box-shadow-medium uk-width-1-2@m uk-text-italic uk-width-1-1">
        <div class="uk-margin-medium-bottom uk-width-expand uk-margin-medium-top uk-margin-small-right uk-text-emphasis uk-margin-small-left uk-grid" uk-grid>
            <span class="uk-text-bold uk-width-1-1"  style="font-size:1.3rem">
                Консультації за телефонами
            </span>
            <div class="uk-width-1-1 uk-width-1-3@m"> 
            <p>
                <a href="tel:0663467891"> 0663467891</a>
            </p>
            <p>
                <a href="tel:0673444892"> 0673444892</a>
            </p>
            </div>
            <div class="uk-width-1-1 uk-width-1-2@m">
            <p class="uk-text-bolder">
                Графік роботи
            </p>
            <p class="uk-text-meta">
            У будні з 8:00 до 21:00
            </p>
            <p class="uk-text-meta">
            Субота з 9:00 до 20:00
            </p>
            <p class="uk-text-meta">
            Неділя з 10:00 до 19:00
            </p>
            </div>
            <span class="uk-text-bold uk-width-1-1"  style="font-size:1.3rem">
                Сервісний відділ
            </span>
            <div class="uk-width-1-1 uk-width-1-3@m"> 
            <p>
                <a href="tel:0663467333"> 0663467333</a>
            </p>
            <p>
                <a href="tel:0983444111"> 0983444111</a>
            </p>
            </div>
            <div class="uk-width-1-1 uk-width-1-2@m">
            <p class="uk-text-bolder">
                Графік роботи
            </p>
            <p class="uk-text-meta">
            У будні з 8:00 до 21:00
            </p>
            <p class="uk-text-meta">
            Субота з 9:00 до 20:00
            </p>
            <p class="uk-text-meta">
            Неділя з 10:00 до 19:00
            </p>
            </div>
        </div>
    </div>
</div>
@endsection