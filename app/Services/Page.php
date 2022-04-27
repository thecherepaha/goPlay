<?php

namespace App\Services;

class Page
{
    public static function part($part_name){
        include_once "views/components/" . $part_name . ".php";
    }

    public static function class($article_class){
            if($_SESSION["user"]["favorites"] == $article->id){
            $class = "btn-primary";
        }else{
            $class = "btn-outline-primary"; 
        }
        echo $class;
    }
    
    public static function likes($article){
        $likes = \R::find('users',' favorites = ?', [$article]); 
        echo count($likes);
    }
}