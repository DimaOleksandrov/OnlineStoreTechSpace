@extends('admin.layouts.main')
@section('content')

<section class="uk-card-body">
            <h3>Iнформацiя замовлення</h3>
            <div class="uk-grid-small uk-grid uk-grid  uk-width-1-1">
                <div class="uk-width-1-4@m uk-width-1-1">
                 <h4 class="uk-margin-medium-left">Товари</h4>
                    @foreach($order->products as $product) 
                    <div class="uk-grid-small uk-margin-medium-left uk-grid" uk-grid="">
                        <div class="uk-width-expand uk-first-column">
                            <div class="uk-text-small"><a class="uk-link-muted" href="{{route('prod', [$product->category->code ,$product->code])}}">{{$product->title}}</a></div>
                            <div class="uk-text-meta">{{$product->pivot->count}} × {{$product->price}}</div>
                        </div>
                    </div>
                    @endforeach
                    <div  class="uk-text-meta  uk-margin-medium-left  uk-margin-small-top">
                            Дата оформлення замовлення: {{$order->created_at}}
                        </div>
                    <p  class="uk-margin-medium-left">Повна цiна: {{$order->getFullPrice()}} грн.</p>
                </div>
                <div class="uk-width-1-4@m uk-width-1-1">
                    <h4 class="uk-margin-medium-left">Замовник</h4>
                    <div class="uk-grid-small uk-margin-medium-left uk-grid" uk-grid="">
                        <div>{{$order->name}}</div>
                        <div>{{$order->phone}}</div>
                        <div>{{$order->email}}</div>
                    </div>
                </div>
                <div class="uk-width-1-4@m uk-width-1-1">
                    <h4>
                        @if($order->addressHome && $order->addressPost) Доставка Кур'єром  @endif
                        @if(!$order->addressHome && $order->addressPost) Доставка в вiддiлення  @endif
                        @if($order->addressStore && !$order->addressPost) Самовивiз з магазину @endif

                    </h4>
                    <div class="uk-grid-small uk-margin-small-left uk-grid" uk-grid="">
                    @if($order->addressHome && $order->addressPost)
                        <div>Вiддiлення НП: {{$order->addressPost}}</div>
                        <div>Адресса замовника: {{$order->addressHome}}</div>
                    @endif
                    @if(!$order->addressHome && $order->addressPost)
                        <div>Вiддiлення НП: {{$order->addressPost}}</div>
                    @endif
                    @if($order->addressStore && !$order->addressPost)
                        <div>Адресса Магазину: {{$order->addressStore}}</div>
                    @endif
                    @isset($order->comment)<div>Комментарiй: {{$order->comment}}</div>@endisset
                    </div>
                </div>
            </div>
 </section>
@endsection