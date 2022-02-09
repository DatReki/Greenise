<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    public function __invoke(Request $request) 
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        error_log("User is trying to register with:
            \nName: ".$fields['name'].
            "\nEmail: ".$fields['email'].
            "\nPassword: ".$fields['password'].
            "\nConfirmation password: ".$fields['password_confirmation'].
            "\n\n");

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        return response()->json(['result' => 'Registration successful'], 201);
    }
}
