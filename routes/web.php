<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'redirect']);


Route::get('/',[HomeController::class,'index']);


Route::post('reservation_table',[HomeController::class,'reservation_table']);

Route::post('/addCart/{id}',[HomeController::class,'addCart']);

Route::get('/show_cart/{id}',[HomeController::class,'show_cart']);

Route::get('/delete_product/{id}',[HomeController::class,'delete_product']);

Route::post('/upload_product_infos',[HomeController::class,'upload_product_infos']);



Route::get('/show_users',[AdminController::class,'show_users']);

Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);

Route::get('/add_galery',[AdminController::class,'add_galery']);

Route::post('add_galeries',[AdminController::class,'add_galeries']);


Route::get('show_galery',[AdminController::class,'show_galery']);

Route::get('delete_galery/{id}',[AdminController::class,'delete_galery']);

Route::get('update_galery/{id}',[AdminController::class,'update_galery']);

Route::post('upload_galery/{id}',[AdminController::class,'upload_galery']);

Route::get('/table_reservation',[AdminController::class,'table_reservation']);

Route::get('/accept_reservation/{id}',[AdminController::class,'accept_reservation']);

Route::get('/delete_reservation/{id}',[AdminController::class,'delete_reservation']);

Route::get('/sendEmail/{id}',[AdminController::class,'sendEmail']);

Route::post('/send_Email/{id}',[AdminController::class,'send_Email']);


Route::get('/add_chef',[AdminController::class,'add_chef']);

Route::post('/upload_chef',[AdminController::class,'upload_chef']);

Route::get('/show_chefs',[AdminController::class,'show_chefs']);

Route::get('/delete_chef/{id}',[AdminController::class,'delete_chef']);

Route::get('/update_chef/{id}',[AdminController::class,'update_chef']);

Route::post('/edit_chef/{id}',[AdminController::class,'edit_chef']);

Route::get('/orders_view',[AdminController::class,'orders_view']);

Route::get('/done_pizza/{id}',[AdminController::class,'done_pizza']);

Route::get('/delete_pizza/{id}',[AdminController::class,'delete_pizza']);

Route::get('/orders_completed',[AdminController::class,'orders_completed']);

Route::get('orders_incomplete',[AdminController::class,'orders_incomplete']);

Route::get('/search',[AdminController::class,'search']);

Route::get('/search_order_complet',[AdminController::class,'search_order_complet']);

Route::get('/search_order_incomplet',[AdminController::class,'search_order_incomplet']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
