<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(Request $request){
        $user_data = array(
        'user'   => $request->get('user'),
        'password'  => $request->get('password')
        );
        
        if(Auth::attempt($user_data)){
            return 'Login exitoso';
        }else{
            return 'Error en el login';
        }
    }
}
