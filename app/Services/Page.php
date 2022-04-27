<?php

namespace App\Services;

class Page
{
    public static function part($part_name){
        include_once "views/components/" . $part_name . ".php";
    }

    public static function class($article_class){
            if($_SESSION["user"]["favorites"] == $article_class){
                $class = "btn-primary";
            }else{
                $class = "btn-outline-primary"; 
            }
        return $class;
    }

    public static function likes($article_id, $article_author){
        $likes = \R::find('users',' favorites = ?', [$article_id]); 
        $logic = false;
        foreach($likes as $like){
            if($like->fullname === $article_author){
                return count($likes);
            }
        }
        return count($likes)+1;
    }
}