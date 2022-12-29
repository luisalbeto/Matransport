<?php

use Illuminate\Support\Facades\Route;


$posts = [
    ['title' => 'First post'],
    ['title' => 'Second post'],
    ['title' => 'Thirt post'],
    ['title' => 'Fourth post'],
];





//Rutas Web del Sistema

Route::view('/Home', 'home')->name('home');

Route::view('/SingUp' , 'singup' , ['posts' => $posts])->name('singup');

Route::view('/Contactanos' , 'contact' )->name('contact');

Route::view('/About', 'about')->name('about');
