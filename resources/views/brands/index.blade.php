@extends('layouts.main')
@section('title', 'Контакти')
@section('content')

<div class="uk-cover-container uk-height-medium">
    <img src="images/mb-catalog.jpg" alt="" uk-cover>
    <div class="uk-overlay uk-light uk-position-center">
        <p1 style="color: white; opacity: 1;font-size:5rem;font-weight: 600;">Бренди</p>
    </div>
</div>
<div class="uk-flex uk-flex-row uk-flex-center uk-section-muted">
    <div class="uk-section-default uk-margin-medium-bottom uk-margin-medium-top uk-box-shadow-medium uk-width-1-2@m uk-text-italic uk-width-1-1">
        <div class="uk-text-center uk-margin-medium-bottom uk-width-expand uk-margin-medium-top uk-margin-small-right uk-text-emphasis uk-margin-small-left uk-grid" uk-grid>
            @foreach($brandsForMenu as $brand)
                <div class="el-content uk-panel"><a href="{{$brand->site}}" style="font-weight: 600;" class="el-content uk-button uk-button-text uk-text-lead">{{$brand->name}}</a></div>
            @endforeach
        </div>
    </div>
</div>
@endsection