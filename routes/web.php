<?php

use App\Http\Controllers\Account\Ac_ItemController;
use App\Http\Controllers\Account\Ac_ProfileController;
use App\Http\Controllers\Account\ACProfileController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');


Route::get('/', function () { return view('landing.home'); });

Route::get('/marketplace',                             [ItemController::class, 'marketplace'])->name('marketplace');

Route::get('/item',                                    [ItemController::class, 'index'])->name('index');
Route::get('/item/{slug}',                             [ItemController::class, 'show']);
Route::get('/item/category/{slug}',                    [ItemController::class, 'category']);
Route::get('/item/store/{slug}',                       [ItemController::class, 'store']);
Route::get('/item/country/{slug}',                     [ItemController::class, 'country']);
Route::get('/item/city/{slug}',                        [ItemController::class, 'city']);

Route::get('/account/profile',                    [Ac_ProfileController::class, 'index'])->name('profile');

Route::middleware(['auth'])->group(function () {
//    Route::get('/account/profile',                    [Ac_ProfileController::class, 'index'])->name('profile');
    Route::resource('/account/item',                Ac_ItemController::class);
    Route::post('/account/item/image-destroy/{id}',              [Ac_ItemController::class, 'imagedestroy'])->name('image.destroy');
    Route::get('/account/item/sort/{sort}',                [Ac_ItemController::class, 'sort'])->name('item.sort');

});
