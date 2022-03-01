<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    /**
     * Function to log a user in
     * 
     * @param Request $request The request. Must contains the following POST values: email & password.
     * @return String JSON string with the result of the request.
     */
    public function __invoke(Request $request) 
    {
        $fields = $request->validate([
            'email' => 'required|string|email|min:4',
            'password' => 'required|string|min:6'
        ]);
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials))
        {
            $request->session()->regenerate();
            return response()->json(['result' => 'Login successful'], 200);
        }
        else
        {
            return response()->json(['result' => 'No user with those login credentials can be found'], 400);
        }
    }
}
