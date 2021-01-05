@extends('admin.layouts.main')
@section('content')
<form method="POST" action="{{route('categories.update',$category)}}" enctype="multipart/form-data">
<div class="uk-card uk-card-default uk-grid-collapse uk-width-1-1 uk-margin uk-grid" uk-grid="">
            <div class="uk-card-media-left uk-cover-container uk-first-column  uk-width-1-4@s">
            <div class="uk-inline-clip uk-transition-toggle">
                <img src="{{Storage::url($category->image)}}" class="uk-margin-medium-left uk-margin-medium-top">
                <div class="uk-position-center">
                    <div class="uk-transition-slide-bottom-small">
                    <div class="js-upload" uk-form-custom>
                        <input type="file" name="image">
                        <button class="uk-button uk-button-secondary" type="button">Завантажити</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="uk-width-1-2@s">
                <div class="uk-card-body">
                @method('PUT')
                        <div  class="uk-width-1-2@s">
                            <h4 class="uk-margin-small" >Назва:  <input class="uk-input uk-form-blank uk-width-1-2@s" type="text" name="name" value="{{$category->name}}"></h4>
                            <h4 class="uk-margin-small">Код:  <input class="uk-input uk-form-blank uk-width-1-2@s" type="text" name="code" value="{{$category->code}}"></h4>

                           </div>
                        <div class="uk-width-1-2@s uk-button-group">
                        @csrf
                            <button  type="submit"class="uk-button uk-button-secondary uk-button-large">Зберегти</button>
                        </div>
                
                </div>
            </div>
        </div>
        </form>
@endsection