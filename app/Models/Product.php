<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'image',
        'brand_id',
        'code',
        'price',
        'display_type',
        'display_diagonal',
        'sim',
        'ram',
        'memory',
        'front_camera',
        'cpu',
        'gpu',
        'type_ram',
        'os',
        'camera',
        'bluetooth',

    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function images(){

        return $this->hasMany(Image::class);
    }
    
    public function getPriceCount(){
        if(!is_null($this->pivot->count)){
            return $this->pivot->count * $this->price;
        }else{
            return $this->price;
        }
    }

}
