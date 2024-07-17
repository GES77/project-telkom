<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('login');
});

Route::get('/admin', function(){
    return view('admin/admin');
});

Route::get('/kontrak', function(){
    return view('admin/kontrak');
});

// OBL

Route::get('/p1', function(){
    return view('admin/obl/p1');
});
Route::get('/p2', function(){
    return view('admin/obl/p2');
});
Route::get('/p3', function(){
    return view('admin/obl/p3');
});
Route::get('/p4', function(){
    return view('admin/obl/p4');
});
Route::get('/p5', function(){
    return view('admin/obl/p5');
});
Route::get('/p6', function(){
    return view('admin/obl/p6');
});
Route::get('/p7', function(){
    return view('admin/obl/p7');
});
Route::get('/p8', function(){
    return view('admin/obl/p8');
});
Route::get('/kl', function(){
    return view('admin/obl/kl');
});

// OBL

// CLOSING

Route::get('/baso', function(){
    return view('admin/closing/baso');
});
Route::get('/baa', function(){
    return view('admin/closing/baa');
});
Route::get('/bai', function(){
    return view('admin/closing/bai');
});
Route::get('/bard', function(){
    return view('admin/closing/bard');
});
Route::get('/bast', function(){
    return view('admin/closing/bast');
});
Route::get('/baut', function(){
    return view('admin/closing/baut');
});

// CLOSING


Route::get('/beritaacara', function(){
    return view('admin/beritaacara/ba');
});
