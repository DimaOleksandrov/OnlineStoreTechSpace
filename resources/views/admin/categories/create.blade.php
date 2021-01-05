@extends('admin.layouts.main')
@section('content')
<form method="POST" action="{{route('categories.store')}}"  enctype="multipart/form-data">
<div class="uk-card uk-card-default uk-grid-collapse uk-width-1-1 uk-margin uk-grid" uk-grid="">
            <div class="uk-card-media-left uk-cover-container uk-tile-muted uk-first-column  uk-width-1-4@s">
                <div class="uk-flex uk-flex-center uk-margin-large-bottom uk-margin-large-top">
                    <div uk-form-custom="target: true">
                        <input name="image" type="file">
                        <input class="uk-input uk-form-width-medium uk-section-secondary" type="text" placeholder="Вибрати фото">
                    </div>
                    
                </div>
            </div>
            <div class="uk-width-1-2@s">
                <div class="uk-card-body">
                        <div  class="uk-width-1-2@s">
                            <h4 class="uk-margin-small" ><input class="uk-input uk-form-blank uk-tile-muted uk-width-1-2@s" type="text" name="name" placeholder="Назва" requred></h4>
                            <h4 class="uk-margin-small"><input class="uk-input uk-form-blank uk-tile-muted uk-width-1-2@s" type="text" name="code" placeholder="URL"requred></h4>
                        </div>
                        <div class="uk-width-1-2@s uk-button-group">
                        @csrf
                            <button  type="submit"class="uk-button uk-button-secondary  uk-width-1-2@s uk-button-large">Зберегти</button>
                        </div>
                </div>
            </div>
        </div>
        </form>
@endsection