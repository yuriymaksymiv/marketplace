<?php

use App\Http\Controllers\Account\Ac_AirdropController;
use App\Http\Controllers\Account\Ac_ItemController;
use App\Http\Controllers\Account\Ac_ProfileController;
use App\Http\Controllers\DocController;
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


Route::get('/', function () { return redirect('marketplace'); });
Route::get('/nft', function () { return redirect('marketplace'); });

Route::get('/marketplace',                                  [ItemController::class, 'marketplace'])->name('marketplace');


Route::get('/marketplace/item',                               [ItemController::class, 'index'])->name('index');
Route::get('/marketplace/item/{slug}',                        [ItemController::class, 'show']);
Route::get('/marketplace/category/{slug}',                    [ItemController::class, 'category']);
Route::get('/marketplace/store/{slug}',                       [ItemController::class, 'store']);
Route::get('/marketplace/country/{slug}',                     [ItemController::class, 'country']);
Route::get('/marketplace/city/{slug}',                        [ItemController::class, 'city']);

Route::get('/marketplace/search',                                  [ItemController::class, 'search'])->name('search');


Route::group(['middleware' => ['auth', 'verified']], function (){
//    Route::get('/account/profile',                    [Ac_ProfileController::class, 'index'])->name('profile');
    Route::put('/account/item/edit-geo',                    [Ac_ItemController::class, 'editGeo'])->name('item.editGeo');
    Route::resource('/account/item',            Ac_ItemController::class);


    Route::post('/account/item/image-destroy/{id}',        [Ac_ItemController::class, 'imagedestroy'])->name('image.destroy');
    Route::get('/account/item/sort/{sort}',                [Ac_ItemController::class, 'sort'])->name('item.sort');

    Route::get('/account/airdrop',                         [Ac_AirdropController::class, 'index'])->name('airdrop');
    Route::get('/account/airdrop/start',                   [Ac_AirdropController::class, 'start'])->name('airdrop.start');
    Route::patch('/account/airdrop/start-update',          [Ac_AirdropController::class, 'startUpdate'])->name('airdrop.startUpdate');
    Route::patch('/account/airdrop/daily-reward',            [Ac_AirdropController::class, 'dailyReward'])->name('airdrop.dailyReward');

    Route::get('/account/settings',                        [Ac_ProfileController::class, 'edit'])->name('settings');
    Route::put('/account/profileImage',                    [Ac_ProfileController::class, 'profileImage'])->name('profile-image.update');
    Route::put('/account/socialMedia',                     [Ac_ProfileController::class, 'socialMedia'])->name('social-media.update');

    Route::get('/getStates/{id}',                          [Ac_ItemController::class, 'getStates']);
    Route::get('/getCities/{id}',                          [Ac_ItemController::class, 'getCities']);

});


Route::get('/docs',                                         [DocController::class, 'projectOverview']);
Route::get('/docs/roadmap',                                 [DocController::class, 'roadMap']);
Route::get('/docs/binance',                                 [DocController::class, 'binance']);
Route::get('/docs/token-sale',                              [DocController::class, 'tokenSale']);
