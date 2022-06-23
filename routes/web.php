<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
//Home and Authorization
    Route::get('/',[UserController::class,'home']);
    Route::get('/redirects',[UserController::class,'redirects']);
    Route::get('service',[UserController::class,'service']);


//Admin
Route::middleware(['admin'])->group(function () {

    //manage users
    Route::get('users',[AdminController::class,'users']);
    Route::get('/delete_user/{id}',[AdminController::class,'deleteuser']);

    //manage countries
    Route::get('add_country',[AdminController::class,'add_country']);
    Route::post('add_country_data',[AdminController::class,'add_country_data']);
    Route::get('show_contries',[AdminController::class,'show_contries']);
    Route::get('delete_country/{id}',[AdminController::class,'delete_country']);
    Route::get('search_country',[AdminController::class,'search_country']); 

    //manage volts
    Route::get('add_volt',[AdminController::class,'add_volt']);
    Route::post('add_volt_data',[AdminController::class,'add_volt_data']);
    Route::get('show_volts',[AdminController::class,'show_volts']);
    Route::get('delete_volt/{id}',[AdminController::class,'delete_volt']);
    Route::get('search_volt',[AdminController::class,'search_volt']); 

    //manage bars
    Route::get('add_bar',[AdminController::class,'add_bar']);
    Route::post('add_bar_data',[AdminController::class,'add_bar_data']);
    Route::get('show_bars',[AdminController::class,'show_bars']);
    Route::get('delete_bar/{id}',[AdminController::class,'delete_bar']);
    Route::get('search_bar',[AdminController::class,'search_bar']);
    Route::get('GetVoltsRelatedToSpecificType/{filter_type}',[AdminController::class,'GetVoltsRelatedToSpecificType']);

    //bars and volts relationship
    Route::get('barwithitsvolt',[AdminController::class,'barwithitsvolt']);
    Route::get('search_barvolt',[AdminController::class,'search_barvolt']);


});

Route::middleware(['user'])->group(function () {

    //Route::get('user_issues',[UserController::class,'user_issues']);

});

    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
