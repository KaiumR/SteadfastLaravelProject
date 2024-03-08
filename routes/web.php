<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\IndxController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/{user_name?}', function ($user_name=null) {
//     //$name=compact('user_name');
//     return view('welcome',['user_name' => $user_name]);
//     // $name=compact["user_name"];
//     // print_r($name);
// });

// Route::get('/{user_name}/{id}',function($user_name,$id){
//     return view('signup',['user_name' => $user_name, 'id'=>$id]);
// });

Route::get('/welcome',[WelcomeController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::POST('/verification',[LoginController::class, 'homePage']);
Route::get('/signup',[SignupController::class, 'index']);
Route::post('/signup',[SignupController::class, 'store']);
Route::get('/home',[IndxController::class, 'index']);

// Route :: get('get-all-session', function(){
//     $session = session()->all();
//     // echo "<pre>";
//     // print_r($session);
//     // echo "<pre>";
// });

// Route::get('set-session',function(Request $request){
//     $request->session()->put('user_name','Rume');
//     return redirect('get-all-session');
// });
// Route::get('destroy-session',function(Request $request){
//     session()->forget(['user_name']);
//     return redirect('get-all-session');
// });

Route::get('/logout',function(){
    if(session()->has('user_name')){
        session()->pull('user_name',null);
    }
    return redirect("/welcome");
});
Route::post('/calculate',[IndxController::class,'calculate']);