<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    public function showLogin()
    {
        // show the form
        return view('login');
    }

    public function doLogin(Request $request)
    {

        // create our user data for the authentication
        $userdata = array(
        'username'     => $request->email,
        'password'  => $request->password
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            return redirect('');


        } else {

            // validation not successful, send back to form
            return redirect('login');
    //        return Redirect::to('login');

        }


    }


    public function logout()
    {
            Auth::logout();
    }
}
