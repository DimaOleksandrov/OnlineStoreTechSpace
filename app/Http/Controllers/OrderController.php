<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\Order;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function index(Request $request){
        session(['previousUrl' => url()->previous()]);
        $orderId = session('orderId');
        $order = Order::find($orderId);
        if(!$order->products()->count()){
            return back();
        };
        //Cookie::queue(Cookie::forget('basket'));
        //var_dump($request->cookie('basket'));
        //var_dump(session('orderId'));
        return view('order.index', ['order' => $order,'previousPage' => session('previousUrl')]);
    }
    public function chekoutConfirm(Request $request){
        $orderId = session('orderId');
        //dd(route('basket'), session('previousUrl'));
        if(!is_null($orderId)){
            $order = Order::find($orderId);
            $request->validate(
                [
                    'name' => 'required|min:2|max:255',
                    'phone' => 'required|min:9|max:255',
                    'email' => 'required|max:255',
                ]
                );
            $delivery = $this->delivery($request);
            $success = $order->saveOrder(($request->name." ".$request->lastName),$request->phone, $request->email ,$delivery);
        }
        if($success){
            session()->flash('success', 'Ваше замовлення принято');
            if(session('previousUrl') == route('basket')){ 
                Cookie::queue(Cookie::forget('basket'));
            }
        }else{
            session()->flash('warning','Помилка');
        };
        return redirect()->route('basket');
    }

    protected function delivery($request){
        //dd($request->all());
        switch($request->delivery){
            case 'pickup':
                return ['deliveryType' => $request->delivery,
                        'addressStore' => $request->store,
                        'comment' => $request->comment,
                        ];
            break;
            case 'сourier':
                return ['deliveryType' => $request->delivery,
                        'addressPost' => $request->addressPost,
                        'addressHome' => $request->addressHome,
                        'comment' => $request->comment,
                        ];
            break;
            case 'post':
                return ['deliveryType' => $request->delivery,
                        'addressPost' => $request->addressPost,
                        'comment' => $request->comment,
                    ];
            break;
        }
    }
    public function fastBuy($productId){
        $order = Order::create();
        session(['orderId' => $order->id]);
        $order->products()->attach($productId);
        return redirect()->route('order');
    }
}
