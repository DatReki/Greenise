<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    public function __invoke(Request $request) 
    {
        error_log("user trying to login with:\nEmail: ".$request->email."\nPassword: ".$request->password."\n\n");
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials))
        {
            $request->session()->regenerate();
            return response()->json(['result' => 'Login successful'], 200);
        }
        else
        {
            return response()->json(['result' => 'Login not successful'], 400);
            /*
            //Throw authentication exception if provided credentials are not correct
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials'
            ]);
            */
        }
    }
}
