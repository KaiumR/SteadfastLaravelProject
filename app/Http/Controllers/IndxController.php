<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndxController extends Controller
{
    public function index(){
        if(session()->has('user_name')){
            return view('indx');
        }
            return redirect('login');
    }
    public  function calculate(Request $request)
    {
        // echo("<pre>");
        // print_r($request);
        // echo("<pre>");
        $result=0;
        if($request['c_type']==0){
            $result=round((($request['amount']*15)/100));
        }else{
            $result=round((($request['amount']*15)/115));
        }

        $value = compact('result');

        if(session()->has('user_name')){
            return view('/calculate')->with($value);
        }
        return redirect('login');
    }
}
