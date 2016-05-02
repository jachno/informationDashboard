<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

public function index()
{


   echo 'test'; 
    
    return view('users.users')->with('users', User::all());
    
}

}
