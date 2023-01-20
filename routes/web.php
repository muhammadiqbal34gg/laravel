<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "halaman home",
        "nama" => "Muhammad Iqbal",
        "job" => "Frontend developer",
        "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae animi asperiores praesentium, soluta commodi ex? Voluptatum reprehenderit repellendus alias modi ipsam ducimus aliquid et voluptas? Veritatis aspernatur quam odio ab?"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "halaman about",
        "judul" => "halo mari kenal lebih jauh dari saya",
        "namalengkap" => "Muhammad Iqbal",
        "ttl" => "jakarta,29-04-2006",
        "wa" => "085890090640",
        "hobi" => "maen",
        "jargon" => "jangan lupa solat",
        "foto" => "images.jpg"
    ]);
});
