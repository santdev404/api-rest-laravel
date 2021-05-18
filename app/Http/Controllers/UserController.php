<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pruebas(Request $request){
        return "Accion de pruebas de user controller";
    }

    public function register(Request $request){

        
        
    }

    public function login(Request $request){
        return "accion de login user"; 
    }
}
