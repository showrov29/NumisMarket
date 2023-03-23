<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function Register( Request $user)
    {
       return $user;
    }

    public function Login( Request $var )
    {
        return $var;
    }
    public function Update( Request $userData )
    {
        return $userData;
    }
    public function Logout(  )
    {
        return true;
    }
    
}
