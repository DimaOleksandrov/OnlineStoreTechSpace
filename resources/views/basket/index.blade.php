@extends('layouts.main')
@section('title','Кошик')
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
<div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
    <div class="uk-text-center uk-first-column">
        <h1 class="uk-margin-small-top uk-margin-remove-bottom">Кошик</h1></div>
    <div class="uk-grid-margin uk-first-column">
        <div class="uk-grid-medium uk-grid" uk-grid="">
            <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                    <header class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                        <div class="uk-grid-small uk-child-width-1-2 uk-grid" uk-grid="">
                            <div class="uk-first-column">Продукт</div>
                            <div>
                                <div class="uk-grid-small uk-child-width-expand uk-grid" uk-grid="">
                                    <div class="uk-first-column">Цiна</div>
                                    <div class="tm-quantity-column">Кiл-сть</div>
                                    <div>Вартiсть</div>
                                    <div class="uk-width-auto">
                                        <div style="width: 20px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    @isset($order)
                    @foreach($order->products as $product)  
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-3 uk-first-column">
                                        <div class="tm-ratio tm-ratio-4-3">
                                            <a class="tm-media-box" href="{{route('prod', [$product->category->code, $product->code])}}">
                                                <figure class="tm-media-box-wrap"><img src="{{Storage::url($product->image)}}" alt=""></figure>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                    <div class="uk-text-meta"><a class="uk-link-heading" href="{{route('cat', $product->category->code)}}">{{$product->category->name}}</a></div>
                                        <a class="uk-link-heading" href="{{route('prod', [$product->category->code, $product->code])}}">{{$product->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Other cells-->
                            <div>
                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center uk-grid" uk-grid="">
                                    <div class="uk-first-column">
                                        <div class="uk-text-muted uk-hidden@m">Цiна</div>
                                        <div>{{$product->price}} грн</div>
                                    </div>
                                    <div class="uk-button-group uk-first-column">
                                    <form action="{{route('basketadd', $product->id)}}" method="POST" class="tm-cart-quantity-column">
                                        <button type="submit" uk-icon="icon: plus; ratio: .75" class="uk-icon"> </button>
                                        @csrf
                                    </form>
                                    <div class="uk-width-xsmall uk-height-small">{{$product->pivot->count}}</div>
                                    <form action="{{route('basketremove', $product->id)}}" method="POST">
                                        <button type="submit" uk-icon="icon: minus; ratio: .75" class="uk-icon"> </button>
                                        @csrf
                                    </form>
                                    </div>
                                    <div>
                                        <div class="uk-text-muted uk-hidden@m">Sum</div>
                                        <div>{{$product->getPriceCount()}} грн</div>
                                    </div>
                                    <form action="{{route('basketremoveall', $product->id)}}" method="POST" class="uk-width-auto@s">
                                        <button type="submit" class="uk-text-danger" uk-icon="icon: close; ratio: 1.3" uk-tooltip="Видалити" title="" aria-expanded="false">
                                        </button>
                                        @csrf
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                    @endforeach 
                    @endisset
                </div>
            </div>
            <div class="uk-width-1-1 tm-aside-column uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-card-small">
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-grid" uk-grid="">
                            <div class="uk-width-expand uk-text-muted uk-first-column">Вартiсть без знижки</div>
                            @if($order ?? '' ?? '') <div>{{$order->getFullPrice()}} грн</div> @endif
                        </div>
                        <div class="uk-grid-small uk-grid" uk-grid="">
                            <div class="uk-width-expand uk-text-muted uk-first-column">Знижка</div>
                            <div class="uk-text-danger">Вiдсутня</div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-expand uk-text-muted uk-first-column">Повна вартiсть</div>
                            @if($order ?? '' ?? '')<div class="uk-text-lead uk-text-bolder">{{$order->getFullPrice()}} грн</div>@endif
                        </div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1" href="{{route('order')}}">Оформити замовлення</a></div>
                </div>
                <div class="uk-sticky-placeholder"  hidden=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection