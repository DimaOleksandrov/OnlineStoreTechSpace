@extends('admin.layouts.main')
@section('content')
<div>
     <div class="uk-card uk-card-default uk-width-expand">
        <div class="uk-card-header">
               Список Замовлень   
        </div>
        <div class="uk-card-body"><div class="chartjs-size-monitor"> 
        <table class="uk-table uk-table-divider uk-width-expand@s">
    <thead>
        <tr>
            <th>#</th>
            <th >Cума замовлення</th>
            <th class="hidden_column visible">Дата оформлення заказу</th>
            <th class="hidden_column visible">ФIО</th>
            <th class="hidden_column">Телефон замовника</th>
            <th class="hidden_column">Пошта замовника</th>
            <th>Повна iнформацiя</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->getFullPrice()}} грн.</td>
            <td class="hidden_column visible">{{$order->updated_at}}</td>
            <td class = "hidden_column visible" >{{$order->name}}</td>
            <td class = "hidden_column">{{$order->phone}}</td>
            <td class = "hidden_column">{{$order->email}}</td>
            <td><a class="uk-button uk-width-1-1" uk-icon="icon: more" href="{{route('orders.show',$order)}}"></td>
        </tr>
    @endforeach
    </tbody>
</table>                         
                                        
         </div>
    </div>
</div>

@endsection