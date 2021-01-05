@extends('layouts.main')
@section('title','404')

@section('content')

<section class="uk-section uk-section-medium">
    <div class="uk-container">
        <div class="uk-text-center">
            <h1 style="font-size:9rem;font-weight: 600;">404</h1>
            <div class="uk-text-lead">Page not found</div>
            <div class="uk-margin-top">
               <a class="el-content uk-button uk-button-text" href="{{route('homePage')}}">Повернутись на головну</a></div>
        </div>
    </div>
</section>

@endsection