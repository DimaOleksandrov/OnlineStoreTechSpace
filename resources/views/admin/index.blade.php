@extends('admin.layouts.main')
@section('content')
<div>
<div class="uk-card uk-card-muted uk-grid-collapse uk-width-1-1 uk-margin-medium-left uk-grid" uk-grid="">
    <div class=" uk-width-1-2 uk-flex uk-flex-column uk-margin-medium-top uk-margin-small-left uk-margin-small-right uk-margin-medium-bottom uk-width-1-4@m">
        <a href="{{route('brands.index')}}" class=" uk-width-1-1 uk-button uk-margin-small-bottom uk-button-secondary">Список брендiв</a>
        <a href="{{route('brands.create')}}" class=" uk-width-1-1 uk-button uk-button-secondary">Створити бренд</a>
    </div>
    <div class="uk-width-1-2 uk-width-1-4@m uk-flex uk-margin-medium-top uk-margin-small-left uk-margin-small-right uk-margin-medium-bottom uk-flex-column">
        <a href="{{route('categories.index')}}" class=" uk-width-1-1 uk-button uk-margin-small-bottom uk-button-secondary">Список категорiй</a>
        <a href="{{route('categories.create')}}" class=" uk-width-1-1 uk-button  uk-button-secondary">Створити категорiю</a>
    </div>
    <div class="uk-width-1-2 uk-width-1-4@m uk-flex uk-margin-medium-top uk-margin-small-left uk-margin-small-right uk-margin-medium-bottom uk-flex-column">
        <a href="{{route('products.index')}}" class=" uk-width-1-1 uk-button uk-margin-small-bottom  uk-button-secondary">Список товарiв</a>
        <a href="{{route('products.create')}}" class=" uk-width-1-1 uk-button  uk-button-secondary">Створити товар</a>
    </div>
    <div class="uk-width-1-2 uk-width-1-4@m uk-flex uk-margin-medium-top uk-margin-small-left uk-margin-small-right uk-margin-medium-bottom uk-flex-column">
        <a href="{{route('orders.index')}}" class=" uk-width-1-1 uk-button uk-margin-small-bottom  uk-button-secondary">Список замовлень</a>
    </div>
</div>
</div>
@endsection