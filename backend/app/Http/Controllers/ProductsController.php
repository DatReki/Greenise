<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\WindTurbine;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    public function GetAllProducts() 
    {
        $cache_key = "all-products";
        //Check if items exist in cache
        $products_exist = Cache::has($cache_key);

        //If not
        if (!$products_exist) 
        {
            $windTurbines = WindTurbine::all();

            //Otherwise put the users in cache with the assigned key for 60 minutes
            Cache::put($cache_key, $windTurbines, now()->addMinutes(60));
            //Return users with 200 status code
            return response($windTurbines, 200);
        }
        else 
        {
            //Get users from cache
            $windTurbines = Cache::get($cache_key);
            //Return users with 200 status code
            return response($windTurbines, 200);
        }
    }
}
