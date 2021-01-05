@extends('admin.layouts.main')
@section('content')

<div>
     <div class="uk-card uk-card-default">
        <div class="uk-card-header">
               Список брендiв 
        </div>
        <div class="uk-card-body"><div class="chartjs-size-monitor"> 
        <table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>#</th>
            <th>Назва</th>
            <th >Кiль-ть товарiв</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td >{{$brand->name}}</td>
            <td >{{$brand->products()->count()}}</td>
            <td class="uk-width-1-5@m uk-width-1-2">
                <div class="uk-flex  uk-width-1-1 uk-width-1-3@m uk-flex-row uk-flex-between">
                    <a class="uk-button uk-padding-remove-horizontal" href="{{route('brands.edit',$brand->id)}}"  uk-icon="icon: pencil"></a>
                    <form method="POST" action="{{route('brands.destroy',$brand->id)}}">
                    @method('DELETE')
                            <button class="uk-button uk-section-default uk-padding-remove-horizontal" type="submit"><span class="uk-text-danger"uk-icon="trash"></span></button>
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