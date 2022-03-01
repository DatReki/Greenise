<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    /**
     * Function to register a new user account
     * 
     * @param Request $request The request. Must contains the following POST values: name, email, password & password_confirmation.
     * @return String JSON string with the result of the request.
     */
    public function __invoke(Request $request) 
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email|min:4',
            'password' => 'required|string|confirmed|min:6',
            'password_confirmation' => 'required|string|min:6'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        return response()->json(['result' => 'Registration successful'], 201);
    }
}
