@extends('layouts.main')
@section('title','Оформлення замовлення')
@section('content')
<link href="{{ asset('css/orderRadio.css') }}" rel="stylesheet">
<script src="{{ asset('js/orderRadio.js') }}" defer></script>
<form action="{{route('chekoutConfirm')}}" class="uk-margin-medium-bottom uk-margin-medium-top" method="POST">
<div class="uk-container">
    <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
        <section class="uk-text-center uk-first-column"><a class="uk-link-muted uk-text-small" href="{{url()->previous()}}"><span class="uk-margin-xsmall-right uk-icon" uk-icon="icon: arrow-left; ratio: .75;"></span>Повернутися</a>
            <h1
            class="uk-margin-small-top uk-margin-remove-bottom">Оформлення замовлення</h1>
        </section>
        <section class="uk-grid-margin uk-first-column">
            <div class="uk-grid-medium uk-grid" uk-grid="">
                <div class="uk-form-stacked uk-width-1-1 tm-checkout uk-width-expand@m uk-first-column">
                    <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                        <section class="uk-first-column">
                            <h2 class="tm-checkout-title">Контактна Iнформацiя</h2>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-grid" uk-grid="">
                                    <div class="uk-first-column">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Им'я</div>
                                            <input class="uk-input" type="text"  name="name" required>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Прiзвище</div>
                                            <input class="uk-input" type="text"  name="lastName" required>
                                        </label>
                                    </div>
                                    <div class="uk-grid-margin uk-first-column">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Номер телефону</div>
                                            <input class="uk-input" name="phone" required>
                                        </label>
                                    </div>
                                    <div class="uk-grid-margin">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Пошта</div>
                                            <input class="uk-input" type="email"  name="email" required>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="uk-grid-margin uk-first-column">
                            <h2 class="tm-checkout-title">Вибiр доставки</h2>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                                <div class =" uk-width-expand uk-flex uk-flex-row uk-flex-around" uk-switcher="animation: uk-animation-fade">
                                    <input type="radio" id="One" name="delivery" value="pickup" checked>
                                    <label  for="One" class="uk-width-1-4 uk-button uk-button-default uk-height-1-1" aria-expanded>Самовивіз з магазину</label>
                                    <input type="radio" id="Two" name="delivery" value="сourier">
                                    <label  for="Two" class="uk-width-1-4 uk-button uk-button-default uk-height-1-1" aria-expanded>Кур'єром Нової Пошти</label>
                                    <input type="radio" id="Three" name="delivery" value="post">
                                    <label  for="Three" class="uk-width-1-4 uk-button uk-button-default uk-height-1-1" aria-expanded>Самовивіз з Нової Пошти</label>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="pickup uk-margin-medium-top uk-margin-small">
                                        <div class="uk-margin-small-left uk-margin-small-right">Магазин за адрессою:
                                            <p class="uk-margin-small-left"> мiсто Харкiв,вулиця Пушкiнська, будинок 123</p><input name="store" type="hidden" value="мiсто Харкiв,вулиця Пушкiнська, будинок 123"></div>
                                        </div>
                                    <div class="post uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-margin-small uk-grid uk-hidden" uk-grid>
                                    <div class="uk-width-3-4 uk-margin-small">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Адресса Вiддiлення</div>
                                            <input class="uk-input" type="text"  name="addressPost">
                                        </label>
                                    </div>
                                    <div class="uk-width-1-6">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">#</div>
                                            <input class="uk-input" type="text"  name="id">
                                        </label>
                                    </div>
                                    </div>
                                    <div class="сourier uk-width-1-2 uk-hidden">
                                    <div class="uk-margin-small">
                                        <label>
                                            <div class="uk-form-label uk-form-label-required">Адресса будинку(повнстю)</div>
                                            <input class="uk-input" type="text"  name="addressHome">
                                        </label>
                                    </div>
                                    </div>
                                    <div class="uk-margin-small">
                                        <label>
                                            Коментарiй
                                                <textarea class="uk-textarea" name="comment"></textarea>
                                        </label>
                                    </div>
                               



</section>                   
    </div>    
</div>
<div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
    <div class="uk-card uk-card-default uk-card-small uk-active">
        <section class="uk-card-body">
            <h4>Iнформацiя замовлення</h4>
            @foreach($order->products as $product) 
            <div class="uk-grid-small uk-grid" uk-grid="">
                <div class="uk-width-expand uk-first-column">
                    <div class="uk-text-small">{{$product->title}}</div>
                    <div class="uk-text-meta">{{$product->pivot->count}} × {{$product->price}}</div>
                </div>
                <div class="uk-text-right">
                    <div>{{$product->price}}</div>
                </div>
            </div>
            @endforeach
        </section>
        <section class="uk-card-body">
           
        </section>
        <section class="uk-card-body">
        <div class="uk-text-meta">
            *оплата проводиться при отриманні товару
        </div>
        </section>
        <section class="uk-card-body">
            <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                <div class="uk-width-expand uk-first-column">
                    <div class="uk-text-muted">Вартiсть</div>
                </div>
                <div class="uk-text-right">
                    <div class="uk-text-lead uk-text-bolder">{{$order->getFullPrice()}} грн</div>
                </div>
            </div>
            <button type="submit" class="uk-button uk-button-primary uk-margin-small uk-width-1-1">Замовити</button>
        </section>
    </div>
</div>
</div>
</section>
</div>
</div>
@csrf
</form>
@endsection