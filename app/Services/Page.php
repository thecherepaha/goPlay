<?php

namespace App\Services;

class Page
{
    public static function part($part_name){
        include_once "views/components/" . $part_name . ".php";
    }
}
