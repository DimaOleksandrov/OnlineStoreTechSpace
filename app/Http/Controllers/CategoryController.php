<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class CategoryController extends Controller
{
    public function index(Request $request,$cod){
        $category = Category::where('code',$cod)->first();
        $productsQuery = Product::query();
        $productsQuery->where('category_id', '=', $category->id);
        if($request->filled('brand')){
            $productsQuery->whereIn('brand_id', $request->brand);
        };
        $request->validate(
                [
                    'price_from'=>'numeric|min:0',
                    'price_to'=>'numeric|min:'.$request->price_from,
                ]
        );
        if($request->filled('diagonal')){
            $productsQuery->whereIn('display_diagonal', $request->diagonal);
        };
        if($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        };
        if($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        };
        $products = $productsQuery->paginate(6);
        $start = $products->currentPage();
        $end = $products->lastPage();
        $products->withQueryString();
        return view('category.index', [ 'category'=> $category,
                                        'products' => $products,
                                        'brands' => $this->brandsFilter($category->id),
                                        'diagonals' => $this->diagonalFilter($category->id),
                                        'rams' => $this->ramFilter($category->id)]);
    }

    protected function brandsFilter($id){
        $brandsQuery = Product::query();
        $brandsQuery->where('category_id', '=', $id);
        $brandsQuery->join('brands' , 'products.brand_id', '=', 'brands.id')
                    ->select('brands.name', 'brands.id')
                    ->distinct();
        return $brandsQuery->get();
    }
    protected function diagonalFilter($id){
        $diagonalQuery = Product::query();
        $diagonalQuery->where('category_id', '=', $id);
        $diagonalQuery->groupBy('display_diagonal')->select('display_diagonal');
        $array = [];
        foreach($diagonalQuery->get() as $item){
            array_push($array,$item->display_diagonal);
        }
        return $array;
    }
    protected function ramFilter($id){
        $ramQuery = Product::query();
        $ramQuery->where('category_id', '=', $id);
        $ramQuery->groupBy('ram')->select('ram');
        $array = [];
        foreach($ramQuery->get() as $item){
            array_push($array,$item->ram);
        }
        return $array;
    }
}
