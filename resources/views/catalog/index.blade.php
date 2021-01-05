@extends('layouts.main')
@section('title','Каталог')
@section('categories', $categories)
@section('content')
<div class="uk-cover-container uk-height-medium">
    <img src="images/catalog.jpg" alt="" uk-cover>
    <div class="uk-overlay uk-light uk-position-center">
                <p1 style="color: white; opacity: 1;font-size:5rem;font-weight: 600;">Каталог</p>
    </div>
</div>
<div class="uk-section uk-section-muted uk-section-small">
            <div class="uk-container">

                <div class="uk-child-width-1-3@m uk-grid-match uk-grid" uk-grid="">
                    @foreach($categories as $category)
                        <div class="">
                        <a class="uk-link-muted" href="{{route('cat', $category->code)}}">
                            <div class="uk-card uk-card-default uk-card-hover uk-height-medium">
                                <div class="uk-card-media-top">
                                    <img class="uk-position-top-center uk-margin-small-top" src="{{Storage::url($category->image)}}" alt>
                                </div>
                                    <div class=" uk-card-body uk-position-bottom-center">
                                        <h3 class="uk-card-title">{{$category->name}}</h3>
                                    </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
@endsection