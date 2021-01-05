@extends('layouts.main')
@section('title',$product->title)
@section('content')
@if(session()->has('success')) 
    <script defer> window.onload = ()=> {
        UIkit.notification({
            message: '<span uk-icon="icon: check"></span> {{session()->get("success")}}',
            status: 'primary',
            pos: 'bottom-right',
            });
        };
    </script>
@endif
@if(session()->has('warning'))
    <script defer> window.onload = ()=> {
        UIkit.notification({
            message: '<span uk-icon="icon: warning"></span> {{session()->get("warning")}}',
            status: 'warning',
            pos: 'bottom-right',
            });
        };
    </script>
@endif
<section class="uk-section uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid>
            <div class="uk-text-center uk-first-column">
            <h1 class="uk-margin-small-top uk-margin-remove-bottom" style="font-weight: 800;">{{$product->title}}</h1></div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack">
                    <div class="uk-first-column">
                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                            <div class="uk-grid-small uk-grid-collapse uk-column-divider uk-grid-match uk-grid" uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                                    <div class="uk-grid-collapse uk-child-width-1-1 uk-slideshow uk-grid uk-grid-stack" uk-slideshow="finite: true; ratio: 4:3;" uk-grid="">
                                        <div class="uk-first-column">
                                            <ul class="uk-slideshow-items uk-border-rounded" uk-lightbox="" style="height: 600px;">
                                                @foreach($product->images as $image)
                                                <li>
                                                    <a class="uk-card-body tm-media-box tm-media-box-zoom" href="{{Storage::url($image->img)}}">
                                                        <figure class="tm-media-box-wrap"> <img src="{{Storage::url($image->img)}}" alt=""> </figure>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="uk-grid-margin uk-first-column">
                                            <div class="uk-card-body uk-flex uk-flex-center">
                                                <div class="uk-width-1-2 uk-visible@s">
                                                    <div uk-slider="finite: true" class="uk-slider">
                                                        <div class="uk-position-relative">
                                                            <div class="uk-slider-container">
                                                                <ul class="tm-slider-items uk-slider-items uk-child-width-1-4 uk-grid uk-grid-small" style="transform: translateX(0px);">
                                                                {{$i=0}}
                                                                @foreach($product->images as $image)
                                                                    <li uk-slideshow-item="{{ $i++}}" class="uk-transition-active uk-active">
                                                                        <div class="tm-ratio tm-ratio-1-1">
                                                                            <a class="tm-media-box tm-media-box-frame">
                                                                                <figure class="tm-media-box-wrap"> <img src="{{Storage::url($image->img)}}" alt="">                                                                                    </figure>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                                </ul> 
                                                                <div>
                                                                    <a class="uk-position-center-left-out uk-position-small uk-slidenav-previous uk-icon uk-slidenav uk-invisible"
                                                                    href="#" uk-slider-item="previous" uk-slidenav-previous="">
                                                                       
                                                                    </a>
                                                                    <a class="uk-position-center-right-out uk-position-small uk-slidenav-next uk-icon uk-slidenav"
                                                                    href="#" uk-slider-item="next" uk-slidenav-next="">
                                                                        
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="uk-slideshow-nav uk-dotnav uk-hidden@s">
                                                    <li uk-slideshow-item="0" class="uk-active">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li uk-slideshow-item="1">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li uk-slideshow-item="2">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li uk-slideshow-item="3">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li uk-slideshow-item="4">
                                                        <a href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-width-1-3@m tm-product-info">
                                    <div class="uk-card-body">
                                        <div class="uk-padding-small uk-background-primary-lighten uk-border-rounded">
                                            <div class="uk-first-column uk-margin-large-top">
                                                <h3 class="tm-product-price" style="font-weight: 700;">{{$product->price}} грн</h3>
                                            </div>
                                            <div class="uk-grid-margin uk-first-column">
                                                <div class=" uk-grid-small uk-column-1-3  uk-grid" uk-grid>
                                    
            
                                            
                                                    <form action="{{route('basketadd', $product->id)}}" method="POST">
                                                        <button class=" uk-button uk-button-primary tm-product-add-button tm-shine js-add-to-cart">Додати в кошик</button>
                                                
                                                    @csrf
                                                    </form>
                                                    <form action="{{route('fastbuy', $product->id)}}" method="POST">
                                                        <button class="uk-button uk-button-secondary tm-product-add-button tm-shine js-add-to-cart">Купити</button>
                                                        @csrf
                                                    </form>
                                                </div>
                                                <div class=" uk-margin-medium">
                                                    <ul class="uk-list uk-list-divider">
                                                        <li>Diagonal: {{$product->display_diagonal}}"</li>
                                                        <li>CPU: {{$product->cpu}}</li>
                                                        <li>Memory: {{$product->memory}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 tm-product-description uk-grid-margin uk-first-column" id="description">
                                    <div class="uk-section uk-section-muted ">
                                        <div class="uk-container">
                                            <nav class="uk-navbar-container uk-margin" uk-navbar>
                                                <div class="uk-navbar-center uk-margin-medium-bottom">
                                                    <div class="uk-navbar-center-center">
                                                        <div>
                                                            <ul class="uk-navbar-nav">
                                                                <li><h3 style="font-weight: 600;">Характеристики</h3> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                            <div class="uk-width-1-1 uk-padding-medium-right uk-padding-medium-left">
                                            @if($product->category->code == 'mobiles' || $product->category->code == 'tablets')
                                                @include('layouts.descriptionpPhone')
                                            @endif
                                            @if($product->category->code == 'notebooks')
                                                @include('layouts.descriptionpNotebook')
                                            @endif    
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection