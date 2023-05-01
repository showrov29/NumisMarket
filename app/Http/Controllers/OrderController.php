<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Add(Request $request){
        $var=new Order;
        $var->email=$request->email;
        $var->phone=$request->phone;
        $var->address=$request->address;
        $var->status=$request->status;
        $var->save();
        return $var->save();

    }
    public function Get(){
        $var=new Order;
        return $var->all();
    }
    public function GetById(int $id){
        $var=new Order;
        return $var->find($id);
    }
    public function Edit(Request $request){
        return $request;
    }
    public function Delete(int $id){
        return $id;
    }
}
