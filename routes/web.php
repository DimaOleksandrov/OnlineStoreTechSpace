<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestPageController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\CategoryController as CategoryShopController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'reset'=> false,
    'confirm'=> false,
    'verify'=> false,

]);

Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutUsPage');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contactsPage');
Route::get('/brands', [BrandsController::class, 'index'])->name('brandsPage');
Route::get('/catalog/{categoryCode}/{productName}', [ProductController::class, 'index'])->name('prod');
Route::get('/catalog/{categoryCode}', [CategoryShopController::class, 'index'])->name('cat');
Route::get('/basket', [BasketController::class, 'index'])->name('basket');
Route::get('/chekout', [OrderController::class, 'index'])->name('order');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::post('/basket/add/{productId}',[BasketController::class, 'basketAdd'])->name('basketadd');
Route::post('/chekout/{productId}',[OrderController::class, 'fastBuy'])->name('fastbuy');
Route::post('/basket/removeall/{productId}',[BasketController::class, 'basketRemoveAll'])->name('basketremoveall');
Route::post('/basket/remove/{productId}',[BasketController::class, 'basketRemove'])->name('basketremove');
Route::post('/chekout', [OrderController::class, 'chekoutConfirm'])->name('chekoutConfirm');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

});


Route::group([
        'middleware' => ['admin'],
        'prefix' => 'admin',
    ], 
    function () {
        
            Route::get('/', [App\Http\Controllers\Admin\GeneralController::class, 'index'])->name('adminIndex'); 
            Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
            Route::resource('products',App\Http\Controllers\Admin\ProductController::class);
            Route::resource('products.images',App\Http\Controllers\Admin\ImageController::class);
            Route::get('/products/{product}/images/{image}/destroy',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('images.destroy');
            Route::resource('orders',App\Http\Controllers\Admin\OrderController::class);
            Route::resource('brands',App\Http\Controllers\Admin\BrandController::class);


});

Route::fallback(function () {
     return view('404.index');
});