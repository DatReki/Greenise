<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApiUsersController extends Controller
{
    public function GetAllColleagues() 
    {
        $cache_key = "home-users";
        //Check if items exist in cache
        $users_exist = Cache::has($cache_key);

        //If not
        if (!$users_exist) 
        {
            //Make a request to randomuser.me for 20 randomly generated people
            $response = Http::get('https://randomuser.me/api/?results=20');
            //Get the body of the response
            $users = $response->body();

            //If the body is null
            if ($users == null) 
            {
                //Return an error message with the error code 500
                return response()->json(['result' => 'Something went wrong while trying to get users'], 500);
            }
            else 
            {
                //Otherwise put the users in cache with the assigned key for 60 minutes
                Cache::put($cache_key, $users, now()->addMinutes(60));
                //Return users with 200 status code
                return response($users, 200);
            }
        }
        else 
        {
            //Get users from cache
            $users = Cache::get($cache_key);
            //Return users with 200 status code
            return response($users, 200);
        }
    }
}
