<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeControler::class, 'index'])->name('home');
Route::get('/products', [HomeControler::class, 'products'])->name('products');
Route::get('/products-details', [HomeControler::class, 'productsDetails'])->name('product.details');
Route::get('/cart', [HomeControler::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeControler::class, 'checkout'])->name('checkout');
Route::get('/user-login', [HomeControler::class, 'userLogin'])->name('user.login');
Route::get('/user-resister', [HomeControler::class, 'userResister'])->name('user.resister');
Route::get('/user-account', [HomeControler::class, 'userAccount'])->name('user.account');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
