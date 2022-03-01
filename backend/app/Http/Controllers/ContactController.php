<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Class only has a single function so we just use invoke rather than creating a specific function
    /**
     * Function to send a contact form
     * 
     * @param Request $request The request. Must contains the following POST values: name, email, password & password_confirmation.
     * @return String JSON string with the result of the request.
     */
    public function __invoke(Request $request) 
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|min:4',
            'reason' => 'required|string|min:4',
            'message' => 'required|string|min:25'
        ]);

        //Since this is just a test application we're not going to do anything with the data we recieve

        return response()->json(['result' => 'Contact successful'], 200);
    }
}
