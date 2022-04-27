<?php

namespace App\Controllers;

use App\Services\Router;

class Article
{
    public function article($data){

        $article_header = $data["article_header"];
        $article_content = $data["article_content"];
        $article_category = $data["category"];

        if($article_header === "" || $article_content === ""){
            die('fill all inputs');
        }

        $article  = \R::dispense('articles');
        $article->article_header = $article_header;
        $article->article_content = $article_content;
        $article->article_category = $article_category;
        $article->article_author = $_SESSION["user"]["fullname"];
        \R::store($article);

        Router::redirect('/');



    }

    public function addhub($data){
        
        $id = $data["article_id"];
        $user_id = $data["user_id"];

        if(!$_SESSION["user"]){
            Router::redirect('/login');
            die();
        }

        $user  = \R::load('users',$user_id);
        $user->favorites = $id;
        \R::store($user);
        
        $_SESSION["user"]["favorites"] = $id;

        Router::redirect('/favorites');        
       
    }


}
