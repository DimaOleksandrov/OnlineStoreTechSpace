@extends('admin.layouts.main')
@section('content')
<div class="uk-card-header uk-margin-small-left">
               Редагування бренда  
</div>
<form method="POST" action="{{route('brands.update',$brand)}}" enctype="multipart/form-data">
<div class="uk-card uk-card-default uk-grid-collapse uk-width-1-1 uk-margin uk-grid" uk-grid="">
            <div class="uk-width-1-2@s">
                <div class="uk-card-body">
                @method('PUT')
                        <div  class="uk-width-1-2@s">
                            <h4 class="uk-margin-small" >Назва:  <input class="uk-input uk-form-blank uk-width-1-2@s" type="text" name="name" value="{{$brand->name}}"></h4>
                            <h4 class="uk-margin-small" >Сайт:  <input class="uk-input uk-form-blank uk-width-1-2@s" type="text" name="site" value="{{$brand->site}}"></h4>
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