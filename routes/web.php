<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->to('/login');
});


// Admin
Route::any('/adminUserForm',[App\Http\Controllers\HomeController::class, 'showForm']);
Route::post('/saveTrader',[App\Http\Controllers\HomeController::class, 'saveTrader']);
Route::get('/adminUsers',[App\Http\Controllers\HomeController::class, 'adminUsers']);
Route::get('/admin_register_shop',[App\Http\Controllers\HomeController::class, 'admin_register_shop']);
Route::post('/admin_save_shop',[App\Http\Controllers\HomeController::class, 'admin_save_shop']);
Route::get('/admin_shops',[App\Http\Controllers\HomeController::class, 'admin_shops']);


// Shop Owner
Route::get('/owner_shop',[App\Http\Controllers\MadukaController::class, 'owner_shop']);
Route::get('/shop_worker',[App\Http\Controllers\MadukaController::class, 'shop_worker']);
Route::post('/create_worker',[App\Http\Controllers\MadukaController::class, 'create_worker']);
Route::get('/owner_add_jumla_product',[App\Http\Controllers\MadukaController::class, 'owner_add_jumla_product']);
Route::post('/saveJumlaProduct',[App\Http\Controllers\MadukaController::class, 'saveJumlaProduct']);
Route::get('/owner_add_rejareja_product',[App\Http\Controllers\MadukaController::class, 'owner_add_rejareja_product']);
Route::post('/saveRejarejaProduct',[App\Http\Controllers\MadukaController::class, 'saveRejarejaProduct']);
Route::get('/owner_view_jumla_product',[App\Http\Controllers\ProductController::class, 'owner_view_jumla_product']);
Route::get('/owner_view_rejareja_product',[App\Http\Controllers\ProductController::class, 'owner_view_rejareja_product']);

//Seller Routes
Route::post('/rejarejaForm',[App\Http\Controllers\ProductController::class, 'rejarejaForm']);
Route::post('/jumlaForm',[App\Http\Controllers\ProductController::class, 'jumlaForm']);
Route::get('/seller_selling_product',[App\Http\Controllers\ProductController::class, 'seller_selling_product']);
Route::get('/seller_today_sales',[App\Http\Controllers\ProductController::class, 'seller_today_sales'])->name('seller_today_sales');
Route::get('/seller_add_jumla_product',[App\Http\Controllers\ProductController::class, 'seller_add_jumla_product'])->name('seller_add_jumla_product');
Route::post('/seller_saveJumlaProduct',[App\Http\Controllers\ProductController::class, 'seller_saveJumlaProduct'])->name('seller_saveJumlaProduct');
Route::get('/seller_view_jumla_product',[App\Http\Controllers\ProductController::class, 'seller_view_jumla_product'])->name('seller_view_jumla_product');
Route::get('/seller_add_rejareja_product',[App\Http\Controllers\ProductController::class, 'seller_add_rejareja_product'])->name('seller_add_rejareja_product');
Route::post('/seller_saveRejarejaProduct',[App\Http\Controllers\ProductController::class, 'seller_saveRejarejaProduct'])->name('seller_saveRejarejaProduct');
Route::get('/seller_view_rejareja_product',[App\Http\Controllers\ProductController::class, 'seller_view_rejareja_product'])->name('seller_view_rejareja_product');
Route::get('/seller_finished_product',[App\Http\Controllers\ProductController::class, 'seller_finished_product'])->name('seller_finished_product');
Route::get('/seller_store',[App\Http\Controllers\ProductController::class, 'seller_store'])->name('seller_store');
Route::get('/seller_shop_workers',[App\Http\Controllers\HomeController::class, 'seller_shop_workers'])->name('seller_shop_workers');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
