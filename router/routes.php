<?php


use App\Services\Router;
use App\Controllers\Auth;


Router::page('/','home');
Router::page('/register','register');
Router::page('/login','login');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');


Router::post('/auth/register', Auth::class, 'register', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::post('/auth/logout', Auth::class, 'logout');
Router::post('/auth/article', Auth::class, 'article', true);
Router::post('/auth/hub', Auth::class, 'hub', true);

Router::enable();
