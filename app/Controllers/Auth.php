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
        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $fileName;
        if(move_uploaded_file($avatar["tmp_name"],$path)){
            //add

        }else{
            Router::error('500');
        }
    }
}
