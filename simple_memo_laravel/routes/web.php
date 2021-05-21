<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login.index');
Route::get('/user', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('user.register');
Route::post('/user/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('user.exec.register');
Route::get('/headgearPost',function(){return view("headgearPost");})->name('headgearPost.index');

// Route::get('/memo',function(){
//     return view("memo");
// })->name('memo.index');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/headgearIndex', function () {return view("headgearIndex");})->name('headgearIndex.index');
    Route::get('/headgearIndex',[App\Http\Controllers\UploadImageController::class,"index"])->name("index_list");

    Route::get('/headgearPost',function(){return view("headgearPost");})->name('headgearPost.index');
// 投稿用の設定
    
    // Route::get('/headgearPost',[App\Http\Controllers\UploadImageController::class,"show"])->name("upload_form");
    Route::post('/upload',[App\Http\Controllers\UploadImageController::class,"upload"])->name("upload_image");
    Route::get('/headgearPost',[App\Http\Controllers\ImageListController::class,"show"])->name("image_list");
    Route::get('logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('headgear.logout');
    
    Route::get('/headgearBrand',function(){return view("headgearBrand");})->name('headgearBrand.index');
    Route::get('/headgearBrand',[App\Http\Controllers\UploadImageController::class,"index3"]);


    Route::get('/headgearContact',function(){return view("headgearContact");})->name('headgearContact.index');
    // Route::get('/headgearContact',[App\Http\Controllers\UploadImageController::class,"index4"]);

    Route::get('/headgearContact',[App\Http\Controllers\UploadImageController::class,"index4"])->name('contact.index');
    Route::get('/headgearContact',[App\Http\Controllers\ContactController::class,"index"])->name('contact.index');
    Route::post('/contactConfirm',[App\Http\Controllers\ContactController::class,"confirm"])->name('confirm');
    Route::post('/contactComplete',[App\Http\Controllers\ContactController::class,"process"])->name('process');
    Route::get('/contactComplete',[App\Http\Controllers\ContactController::class,"complete"])->name('complete');
});
// お問い合わせ




Auth::routes();
