<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{

    public function auth($data){
        $email = $data["email"];
        $password = $data["password"];
        
        $user = \R::findOne('users', 'email = ?', [$email]);
        if(!$user){
            die('User not found!');
        }
        if(password_verify($password, $user->password)){
            session_start();
            $_SESSION["user_id"] = $user->id;
            $_SESSION["group"] = $user->group;
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
            \R::store($user);
            Router::redirect('/login');
        }else{
            Router::error(500);
        }
    }
}
