<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Add(Request $request){
        return $request;
    }
    public function Get(){
        return "all the advertisement";
    }
    public function GetById(int $id){
        return $id;
    }
    public function Edit(Request $request){
        return $request;
    }
    public function Delete(int $id){
        return $id;
    }
}
