<?php


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
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>faris Malik Al Abdillah</b>";
});

Route::get("/Nim", function () {
    return "1811102441035";
});

Route::get("/instagram", function () {
    return "faris_audah93";
});

Route::get("/Twiter", function () {
    return "absurd_bet";
});

Route::get("/Universitas", function () {
    return "Muhammadiyah Kalimantan Timur";
});

Route::get("/semester", function () {
    return "Semester 5";
});
use App\Http\Controllers\farisController;

Route::get("/faris/one", [farisController::class, "one"]);
Route::get("/faris/two", [farisController::class, "two"]);
Route::get("/faris/three", [farisController::class, "three"]);


use App\Http\Controllers\malikController;

Route::get("/malik/satu", [malikController::class, "satu"]);
Route::get("/malik/dua", [malikController::class, "dua"]);
Route::get("/malik/tiga", [malikController::class, "tiga"]);

Route::get("/test-tema", [farisController::class, "index"]);
