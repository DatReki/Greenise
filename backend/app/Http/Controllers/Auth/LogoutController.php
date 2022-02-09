<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    public function __invoke(Request $request) 
    {
        //Logout
        auth()->guard('web')->logout();
        //Invalidate current session
        $request->session()->invalidate();
        //Generate new session
        $request->session()->regenerateToken();

        return response()->json(['result' => 'logout successful'], 200);
    }
}
