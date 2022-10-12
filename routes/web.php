<?php

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TestimoniController;

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
    return view('pages.home', [
        'active' => 'home',
        'testi' => DB::table('testimoni')->get(),
        'kategori' => DB::table('categories')->get(),
        'products' => DB::table('products')->get(),
        'best_products' => DB::table('products')->where('best_seller',1)->get(),
        'event'=> DB::table('events')->where('is_show',1)->get()
    ]);
})->name('home');

Route::get('/story', function () {
    return view('pages.story', [
        'active' => 'story'
    ]);
});

Route::get('/where', function () {
    return view('pages.where', [
        'active' => 'where'
    ]);
});

Route::get('/faq', function () {
    return view('pages.faq', [
        'active' => 'faq'
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', [
        'active' => 'contact'
    ]);
});
Route::get('/news/{category}',[NewsController::class, 'showNews']);
Route::get('/news/{category}/',[NewsController::class, 'showNews'])->name('news.{category}');
Route::get('/news/{category}/{slug}',[NewsController::class, 'detailNews'])->name('news.{category}/{slug}');

Route::post('contact', [ContactController::class, 'sendMessage']);
Route::post('/admin',[AuthController::class,'doLogin']);
Route::get('/admin/dashboard',[AdminController::class,'index'])->middleware('auth');
Route::post('logout',[AuthController::class,'doLogout'])->middleware('auth');

Route::resource('kelolaUser', UsersController::class)->middleware('auth')->middleware('auth');
Route::get('kelolaUser/{kelolaUser}/editPass',[UsersController::class,'editPass'])->name('kelolaUser.editPass')->middleware('auth');
Route::patch('kelolaUser/{kelolaUser}/updatePass',[UsersController::class,'updatePass'])->name('kelolaUser.updatePass')->middleware('auth');
Route::resource('kelolaProduk',ProductController::class)->middleware('auth');
Route::get('kelolaProduk/{kelolaProduk}/editDetail',[ProductController::class,'editDetail'])->name('kelolaProduk.editDetail')->middleware('auth');
Route::put('kelolaProduk/{kelolaProduk}/updateProduk',[ProductController::class,'updateProduk'])->name('kelolaProduk.updateProduk')->middleware('auth');

Route::get('kelolaBestSeller',[ProductController::class,'bestSeller'])->middleware('auth');
Route::put('kelolaBestSeller/{kelolaProduk}/updateBestSeller',[ProductController::class,'updateBestSeller'])->name('kelolaBestSeller.updateBestSeller')->middleware('auth');

Route::resource('kelolaKategori',CategoryController::class)->middleware('auth');
Route::resource('kelolaTestimoni', TestimoniController::class)->middleware('auth');
Route::resource('kelolaBerita',NewsController::class)->middleware('auth');
Route::get('kelolaSpotlight',[NewsController::class,'spotlightNews'])->middleware('auth');
Route::put('kelolaSpotlight/{kelolaBeritum}/updateSpotlight',[NewsController::class,'updateSpotlight'])->name('kelolaSpotlight.updateSpotlight')->middleware('auth');
Route::resource('kelolaEvent', EventController::class)->middleware('auth');
