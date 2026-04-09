<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/home', function () {
    return view('welcome');
});

Route::redirect('/', '/home');
