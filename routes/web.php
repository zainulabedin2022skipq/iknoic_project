<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\dashboard;

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





// ======================= Fronted Route =========================================
Route::middleware(['web', 'auth'])->group(function () {
Route::get('/index', [index::class, 'index']);
Route::get('/dashboard', [dashboard::class, 'dashboard']);
Route::get('/dashboard/create_product', [dashboard::class, 'create_product']);
Route::post('/store_product', [dashboard::class, 'store_product']);
Route::post('/{id}/user_feedback', [dashboard::class, 'create_feedback']);
Route::get('/dashboard/show_feedback', [dashboard::class, 'show_feedback']);
Route::get('/logout', [index::class, 'logout']);

// ======================= End Fronted Route =====================================

});

// ======================= Create Product =========================================
Route::get('/', [index::class, 'login'])->name('login');
Route::get('/register', [index::class, 'register']);
Route::post('/store_register', [index::class, 'store_register']);
Route::post('/store_login', [index::class, 'store_login']);
// ======================= End Product =====================================





