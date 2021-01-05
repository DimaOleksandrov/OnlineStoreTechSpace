<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    public function getFullPrice(){
        $sum=0;
        foreach($this->products as $product) {
            $sum+=$product->getPriceCount();
        }
        return $sum;
    }
    public function saveOrder($name, $phone, $email, $delivery){
        if($this->status == 0){
            $this->status = 1;
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->delivery = $delivery['deliveryType'];
            $this->addressStore = isset($delivery['addressStore']) ? $delivery['addressStore'] : 0 ;
            $this->addressPost = isset($delivery['addressPost']) ? $delivery['addressPost'] : 0 ;
            $this->addressHome = isset($delivery['addressHome']) ? $delivery['addressHome'] : 0 ;
            $this->comment = isset($delivery['comment']) ? $delivery['comment'] : 0 ;
            $this->save();
            session()->forget('orderId');
            return true;
        }else {
            return false;
        }
    }
    public function saveType($value){
        if($this->status == 0){
            $this->basketOrSingle = $value;
            $this->save();
        }else {
        }
    }
}
