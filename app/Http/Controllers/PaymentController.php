<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function Add(Request $request){

        
    }
    public function Get(){
        $var=new Payment;
        return $var->all();
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
