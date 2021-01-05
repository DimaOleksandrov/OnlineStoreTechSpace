<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Order;
use Illuminate\Support\Facades\Cookie;

class BasketController extends Controller
{
    public function index(Request $request){
        $order = $this->checkSession($request);
        if(!is_null($order->id)){
            $order=Order::find($order->id);
        }else{
            return view('basket.index');
        }
        return view('basket.index',compact('order'));
    }

    public function basketAdd(Request $request,$productId){
        $order = $this->checkSession($request);
        session(['orderId'=> $order->id]);
        if( $order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();

        }else{
            $order->products()->attach($productId);
        }
        if(!is_null($order->products()->where('product_id',$productId)->first()->pivot)){
            session()->flash('success', 'Додано до кошику');
        }else{
            session()->flash('warning','Помилка');
        };
        return back();
    }

    public function basketRemove(Request $request,$productId){
        $order = $this->checkSession($request);
        if(!is_null($order->id)){
            $order = Order::find($orderId);
            if( $order->products->contains($productId)){
                $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
                if($pivotRow->count < 2){
                    $order->products()->detach($productId);
                }else{
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }
        }
        return redirect()->route('basket');
        
    }
    public function checkSession($request){
        if(is_null($request->cookie('basket')))
        {
            $order = Order::create();  
            Cookie::queue('basket', $order->id);
        }
        else{
            $order=Order::find($request->cookie('basket'));
        }
        session(['orderId' => $order->id]);
        return $order;
    }
    public function basketRemoveAll($productId){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
            $order->products()->detach($productId);
        }
        return redirect()->route('basket');

    }
}

