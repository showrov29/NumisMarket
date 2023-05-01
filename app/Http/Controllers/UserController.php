<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    public function Register( Request $x)
    {
        $user=new User;
        $user->name=$x->name;
        $user->email=$x->email;
        $user->phone=$x->phone;
        $user->address=$x->address;
        $user->password=$x->password;
        $user->nid=$x->nid;
        $user->sells=$x->sells;
        $user->purchases=$x->purchases;
        $user->email_verified_at=$x->email_verified_at;
        $user->save();
       return $user ;
    }

    public function Login( Request $var )
    {
        $x=new User;

        return $x->where('id',1) ;
    }
    public function Update( Request $userData )
    {
        return $userData;
    }
    public function Logout(  )
    {
        $email='showrovislam29@gmail.com';
        $user=new User;
       $x=$user->where('email','=',$email);
        return $x;
    }
    
}
