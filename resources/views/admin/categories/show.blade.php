@extends('admin.layouts.main')
@section('content')
        <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-1 uk-margin uk-grid" uk-grid="">
            <div class="uk-card-media-left uk-cover-container uk-first-column  uk-width-1-4@s">
                <img src="{{Storage::url($category->image)}}" class="uk-margin-large-top uk-margin-large-bottom uk-margin-large-left uk-margin-large-right" >
            </div>
            <div class="uk-width-1-2@s">
                <div class="uk-card-body">
                    <div  class="uk-width-1-2@s">
                        <h4 class="uk-margin-small">#: {{$category->id}}</h4>
                        <h4 class="uk-margin-small" >Назва: {{$category->name}}</h4>
                        <h4 class="uk-margin-small">Код: {{$category->code}}</h4>
                        <h4 class="uk-margin-small">Кіл-ть товарів: {{$category->products->count()}}</h4>
                    </div>
                    <div class="uk-width-1-2@s uk-button-group">
                        <a class="uk-button uk-button-secondary uk-button-large" href="{{route('categories.edit',$category->id)}}">Редагувати</a>
                        <form method="POST" action="{{route('categories.destroy',$category->id)}}">
                        @method('DELETE')
                            <button class="uk-button uk-button-danger uk-button-large" type="submit">видалити</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

