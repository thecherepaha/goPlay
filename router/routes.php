<?php


use App\Services\Router;
use App\Controllers\Auth;


Router::page('/','home');
Router::page('/register','register');
Router::page('/login','login');
Router::page('/profile', 'profile');

Router::post('/auth/register', Auth::class, 'register', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::enable();
