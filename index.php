<?php  

session_start();

$page_title = "Home";
use App\Services\App;

require_once __DIR__."/vendor/autoload.php";
App::start();
require_once __DIR__."/router/routes.php";