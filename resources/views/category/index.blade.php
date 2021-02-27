@extends('layouts.main')
@section('title', $category->name)
@section('content')
<script src="{{ asset('js/doubleRange.js') }}" defer></script>
<link href="{{ asset('css/doubleRange.css') }}" rel="stylesheet">
@error('price_from')
<script defer> window.onload = ()=> {
        UIkit.notification({
            message: '<span uk-icon="icon: warning"></span> Помилка',
            status: 'warning',
            pos: 'bottom-right',
            });
        };
    </script>
@enderror
@error('price_to')
<script defer> window.onload = ()=> {
        UIkit.notification({
            message: '<span uk-icon="icon: warning"></span> Помилка',
            status: 'warning',
            pos: 'bottom-right',
            });
        };
    </script>
@enderror
<div class="uk-grid-medium  uk-section-muted uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
        <section class="uk-text-center uk-section-muted uk-margin-small-top  uk-first-column">
            <h1
            class="uk-margin-small-top uk-margin-remove-bottom">{{$category->name}}</h1>
        </section>
<div class="uk-section uk-section-muted uk-section-small" id="First">
    <div class="uk-section uk-grid-row-medium uk-margin-medium-right uk-margin-medium-left uk-grid" uk-grid>
                <div class="uk-width-1-4@m uk-width-1-1 uk-first-column uk-margin-small-right uk-margin-small-left" style="padding: 0 0;">
                                <div class="uk-card uk-section-default uk-card-body uk-overflow-auto uk-flex uk-flex-column">
                                <h3 class="uk-text-center uk-position-top uk-margin-small-top" style="font-weight: 600;">Фiльтр</h3>
                                    <span class="uk-nav-header" style="font-weight: 500;">Цiна</span>
                                    <form class="uk-nav uk-nav-default">
                                        <div class="uk-margin-medium-left uk-margin-small-bottom uk-margin-medium-right uk-flex uk-flex-around">
                                          
                                                <input class="uk-input uk-width-1-3"  name="price_from" id="minval"  type="text" value="{{( request()->price_from ?? '') ?  request()->price_from : $category->products->min('price')}}">
                                                
                                                <input class="uk-input uk-width-1-3" name="price_to" id="maxval" type="text" value="{{(request()->price_to ?? '') ?  request()->price_to : $category->products->max('price')}}">
                                            
                                        </div>
                                    <div class="uk-margin-medium-left uk-margin-medium-right" id="parentDoubleRange">
                                        <input class="" id="min" type="range" value="{{ (request()->price_from  ?? '') ?  request()->price_from  : $category->products->min('price') }}"  min="{{$category->products->min('price')}}" max="{{$category->products->max('price')}}" step="1">
                                        <input class="" id="max" type="range" value="{{(request()->price_to ?? '') ?  request()->price_to : $category->products->max('price')}}" min="{{$category->products->min('price')}}" max="{{$category->products->max('price')}}" step="1">
                                        <div class="slider">
                                            <div class="track"></div>
                                            <div class="range"></div>
                                            <div class="thumb left"></div>
                                            <div class="thumb right"></div>
                                        </div>
                                    </div>
                                    <div class="uk-margin-medium-top uk-margin-medium-bottom uk-margin-medium-left uk-margin-medium-right uk-nav-divider "></div>
                                    <span class="uk-nav-header" style="font-weight: 500;">Бренд</span>
                                    <div class="uk-margin-medium-left uk-margin-medium-right uk-flex uk-flex-column">
                                        @foreach($brands as $brand)
                                            <label class="uk-width-1-1 uk-margin-small-left uk-margin-small-top" style="font-weight: 400;"><input class="uk-checkbox" @isset(request()->brand[$brand->id]) checked @endisset name="brand[{{$brand->id}}]" value="{{$brand->id}}"  type="checkbox">  {{$brand->name}}</label>
                                        @endforeach 
                                    </div>
                                    <div class="uk-margin-medium-top uk-margin-medium-bottom uk-margin-medium-left uk-margin-medium-right uk-nav-divider "></div>
                                    <span class="uk-nav-header" style="font-weight: 500;">Дiагональ</span>
                                    <div class="uk-margin-medium-left  uk-flex uk-flex-column uk-margin-medium-right">
                                        @foreach($diagonals as $diagonal)
                                            <label class="uk-width-1-1 uk-margin-small-left uk-margin-small-top" style="font-weight: 400;"><input class="uk-checkbox" @isset(request()->diagonal[$diagonal]) checked @endisset name="diagonal[{{$diagonal}}]" value="{{$diagonal}}"  type="checkbox">  {{$diagonal}}</label>
                                        @endforeach 
                                    </div>
                                    <div class="uk-margin-medium-top uk-margin-medium-bottom uk-margin-medium-left uk-margin-medium-right uk-nav-divider "></div>
                                    <span class="uk-nav-header" style="font-weight: 500;">ОЗУ</span>
                                    <div class="uk-margin-medium-left  uk-flex uk-flex-column uk-margin-medium-right">
                                        @foreach($rams as $ram)
                                        @if($ram)
                                            <label class="uk-width-1-1 uk-margin-small-left uk-margin-small-top" style="font-weight: 400;"><input class="uk-checkbox" @isset(request()->ram[$ram]) checked @endisset name="ram[{{$ram}}]" value="{{$ram}}"  type="checkbox">  {{$ram}}</label>
                                        @endif
                                        @endforeach 
                                    </div>
                                    <div class="uk-margin-medium-left uk-margin-medium-right uk-margin-medium-top uk-flex uk-flex-around">
                                        <button type="sumbit" class="uk-button uk-button-primary">Виконати</button>
                                        @if(url()->full() != route('cat', $category->code))<a href="{{route('cat', $category->code)}}" class="uk-button uk-button-danger">Скинути</a>@endif
                                        @csrf
                                    </div>
                                </form>
                                </div><div class="uk-sticky-placeholder" hidden=""></div>
                </div>
                <div class="uk-width-expand@m uk-width-1-1 uk-margin-small-right uk-margin-small-left  uk-section-default">
                <div class="uk-width-expand uk-child-width-1-5@m uk-section-default uk-grid uk-grid-column-small uk-grid-row-small" style="padding: 0 0;" uk-grid>
                    @foreach($products as $product)
                    <div class="uk-margin-small-top">
                    <a class="uk-link-heading" href="{{route('prod', [$category->code ,$product->code])}}">
                        <div class="uk-card uk-section-default uk-box-shadow-hover-large" style="padding: 0 0;">
                            <div class="uk-card-media-top">
                                <img class="uk-margin-small-top" src="{{Storage::url($product->image)}}"  width="100%" alt="">
                            </div>
                            <div class="uk-card-body" style="padding: 0 4px;">
                                <h5  class=" uk-text-center uk-text-bold uk-margin-small-top ">{{$product->title}}</h5>
                                <h4 uk-text-bold class="uk-text-center uk-text-bold uk-margin-small-top uk-margin-small-bottom">{{$product->price}}</h4>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                    </div>
                </div>
        </div>
    <div class="uk-section uk-section-muted uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-center uk-flex-row">
       {{$products->links()}}
        </div>
    </div>
    </div>

@endsection
