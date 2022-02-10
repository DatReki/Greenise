<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Resources extends Controller
{
    public function GetAllResources() 
    {
        /*
        $cache_key = "all-resources";
        //Check if items exist in cache
        $resources_exist = Cache::has($cache_key);

        //If not
        if (!$resources_exist) 
        {

            //Otherwise put the users in cache with the assigned key for 60 minutes
            Cache::put($cache_key, $resources, now()->addMinutes(60));
            //Return users with 200 status code
            return response($resources, 200);
        }
        else 
        {
            //Get users from cache
            $resources = Cache::get($cache_key);
            //Return users with 200 status code
            return response($resources, 200);
        }
        */
    }

    private function PassResources()
    {

    }

    public function Unsplash()
    {

    }
}
