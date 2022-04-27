<?php


use App\Services\Router;
use App\Controllers\Auth;
use App\Controllers\Article;

Router::page('/','home');
Router::page('/register','register');
Router::page('/login','login');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');
Router::page('/favorites', 'favorites');


Router::post('/auth/register', Auth::class, 'register', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::post('/auth/logout', Auth::class, 'logout');
Router::post('/auth/article', Article::class, 'article', true);
Router::post('/auth/addhub', Article::class, 'addhub', true);

Router::enable();
