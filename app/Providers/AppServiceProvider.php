<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Collection;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share(['categoriesForMenu' => Category::all()]);
        View::share(['productsForMenu' => Product::all()]);
        View::share(['brandsForMenu' => Brand::all()]);
        Paginator::defaultView('pagination-uikit::uikit3');
        Paginator::defaultSimpleView('pagination-uikit::uikit3-simple');
        

        
    }
}
