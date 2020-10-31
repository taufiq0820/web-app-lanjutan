<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;
use App\Http\Controllers\Controller2;

Route::get("/satu", [Controller1::class, "one"]);
Route::get("/dua", [Controller1::class, "two"]);
Route::get("/tiga", [Controller1::class, "three"]);
Route::get("/empat", [Controller2::class, "film"]);
Route::get("/lima", [Controller2::class, "makanan"]);
Route::get("/enam", [Controller2::class, "minuman"]);


Route::get("/nama", function () {
    return "<h1> nama saya Taufiqurrahman </h1>";
});

Route::get("/nim", function () {
    return "<h1> NIM 1811102441094 </h1>";
});

Route::get("/kelas", function () {
    return "<h1> kelas A </h1>";
});

Route::get("/nomor", function () {
    return "<h1> nomor rumah 70 </h1>";
});

Route::get("/makanan", function () {
    return "<h1> Geprek Mba Har </h1>";
});
?>