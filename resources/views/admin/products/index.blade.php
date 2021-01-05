@extends('admin.layouts.main')
@section('content')

<div>
     <div class="uk-card uk-card-default">
        <div class="uk-card-header">
               Список товарiв  
        </div>
        <div class="uk-card-body"><div class="chartjs-size-monitor"> 
        <table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th class="hidden_column">Бренд</th>
            <th>Назва</th>
            <th class="hidden_column">Категорiя</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td class="hidden_column">{{$product->brand->name}}</td>
            <td class="uk-width-expand@m uk-width-1-2">{{$product->title}}</td>
            <td class="hidden_column">{{$product->category->name}}</td>
            <td class="uk-width-1-5@m uk-width-1-2">
            <div class="uk-flex uk-flex-row uk-flex-between">
                    <a class="uk-button uk-padding-remove-horizontal" href="{{route('prod', [$product->category->code ,$product->code])}}"  uk-icon="icon: more"></a>
                    <a class="uk-button uk-padding-remove-horizontal" href="{{route('products.edit',$product->id)}}"  uk-icon="icon: pencil"></a>
                    <form method="POST" action="{{route('products.destroy',$product->id)}}">
                    @method('DELETE')
                            <button class="uk-button  uk-padding-remove-horizontal uk-section-default" type="submit"><span class="uk-text-danger"uk-icon="trash"></span></button>
                            @csrf
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>                         
                                        
         </div>
    </div>
</div>

@endsection