<?php


use App\Services\Router;
use App\Controller\Auth;


Router::page('/','home');
Router::page('/register','register');
Router::page('/login','login');
Router::post('/auth/registr', Auth::class, 'registr');

Router::enable();
