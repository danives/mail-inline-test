<?php

use Illuminate\Http\Request;
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

Route::get('/', static function () {
    return view('welcome');
});

Route::get('/preview' , static function () {
    return new \App\Mail\TestEmail();
});

Route::post('/mail', static function (Request $request) {
    \Illuminate\Support\Facades\Mail::to($request->get('email'))->send(new \App\Mail\TestEmail());
    return back()->with('message', 'Email sent!');
})->name("mail");
