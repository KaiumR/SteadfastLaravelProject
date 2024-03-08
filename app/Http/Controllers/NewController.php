<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        //return view('welcome',['user_name' => $user_name]);
        return view('welcome');
    }
}
