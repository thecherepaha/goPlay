<?php


use App\Services\Router;

Router::page('/','home');
Router::page('/register','register');
Router::page('/login','login');

Router::enable();
