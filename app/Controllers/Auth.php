<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
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
            \R::store($user);
            Router::redirect('login');
        }else{
            Router::error(500);
        }
    }
}
