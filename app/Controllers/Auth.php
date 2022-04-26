<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
    public function article($data){

        $article_header = $data["article_header"];
        $article_content = $data["article_content"];
        if($article_header === "" || $article_content === ""){
            die('fill all inputs');
        }

        $article  = \R::dispense('articles');
        $article->article_header = $article_header;
        $article->article_content = $article_content;
        $article->article_author = $_SESSION["user"]["fullname"];
        \R::store($article);

        Router::redirect('/');



    }

    public function addhub($data){
        $id = $data["article_id"];

        if(!$_SESSION("user")){
            Router::redirect('/login');
        }
        $user_id = $_SESSION["user"]["id"];
        print_r($user_id);

        // $article = \R::findOne( 'articles', ' id = ? ', [$id]);

        
        // $user  = \R::load('users', ' id LIKE ? ',[$_SESSION["user"]["id"]]);
        // $user->favorites = $id;

        // \R::store($user);
        // print_r($user);
        // $user->favorites = $id;

        // \R::store($user);


        
       
    }

    public function login($data){
        $email = $data["email"];
        $password = $data["password"];
        
        $user = \R::findOne('users', 'email = ?', [$email]);
        if(!$user){
            die('User not found!');
        }
        if(password_verify($password, $user->password)){
            session_start();
            $_SESSION["user"] = [
                "id" => $user->id,
                "username" => $user->username,
                "fullname" => $user->fullname,
                "group" => $user->group,
                "email" => $user->email,
                "avatar" => $user->avatar,
            ]; 
            
            Router::redirect('/profile');
        }else{
            die('Incorrect login or password');
        }
    }

    
    public function register($data, $files){
        $email = $data["email"];
        $username = $data["username"];
        $fullname = $data["fullname"];
        $password = $data["password"];
        $pass_confirm = $data["pass_confirm"];

        if($password!==$pass_confirm){
            Router::error(500);
            die();
        }

        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $fileName;
        if(move_uploaded_file($avatar["tmp_name"],$path)){
            $user  = \R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->fullname = $fullname;
            $user->avatar = "/" . $path;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->group = 1;
            $user->favorites = "";
            \R::store($user);
            Router::redirect('/login');
        }else{
            Router::error(500);
        }
    }

    public function logout(){
        unset($_SESSION["user"]);
        Router::redirect('/login');
    }
}
