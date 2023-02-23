<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config("comics");
    $images = config("images");
    return view('home', compact("comics", "images"));
});