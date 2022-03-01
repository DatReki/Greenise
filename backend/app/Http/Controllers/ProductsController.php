<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Car;
use App\Models\Products\SolarPanel;
use App\Models\Products\WindTurbine;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    /**
     * Get cars from the database
     * 
     * @return String JSON containing the result.
     */
    public function GetCars()
    {
        $cache_key = "product_cars";
        $result = $this->CheckIfCacheExists($cache_key);
        if ($result)
        {
            //Get cars from cache
            $cars = Cache::get($cache_key);
            //Return cars with 200 status code
            return response($cars, 200);
        }
        else
        {            
            //Get all cars from the database
            $cars = Car::all();
            //Add all of them to cache for 60 minutes 
            $this->AddItemToCache($cache_key, $cars);
            //Return cars with 200 status code
            return response($cars, 200);
        }
    }

    /**
     * Get windturbines from the database
     * 
     * @return String JSON containing the result.
     */
    public function GetWindTurbines()
    {
        $cache_key = "product_wind-turbine";
        $result = $this->CheckIfCacheExists($cache_key);
        if ($result)
        {
            //Get wind turbines from cache
            $windTurbines = Cache::get($cache_key);
            //Return wind turbines with 200 status code
            return response($windTurbines, 200);
        }
        else
        {
            //Get all wind turbines from the database
            $windTurbines = WindTurbine::all();
            //Add all of them to cache for 60 minutes 
            $this->AddItemToCache($cache_key, $windTurbines);
            //Return wind turbines with 200 status code
            return response($windTurbines, 200);
        }
    }

    /**
     * Get solar panels from the database
     * 
     * @return String JSON containing the result.
     */
    public function GetSolarPanels()
    {
        $cache_key = "product_solar-panel";
        $result = $this->CheckIfCacheExists($cache_key);
        if ($result)
        {
            //Get wind solar panels from cache
            $solarPanels = Cache::get($cache_key);
            //Return solar panels with 200 status code
            return response($solarPanels, 200);
        }
        else
        {
            //Get all solar panels from the database
            $solarPanels = SolarPanel::all();
            //Add all of them to cache for 60 minutes
            $this->AddItemToCache($cache_key, $solarPanels);
            //Return solar panels with 200 status code
            return response($solarPanels, 200);
        }
    }

    /**
     * Check if item exists in cache
     * 
     * @param String $cache_key A string containing the name of the cache item.
     * @return Bool Shows if cache item exists or not.
     */
    private function CheckIfCacheExists($cache_key)
    {
        //Check if items exist in cache
        $products_exist = Cache::has($cache_key);
        return $products_exist;
    }

    /**
     * Add a product/item to cache
     * 
     * @param String $cache_key A string containing the name of the cache item.
     * @param Object $product A object containing the value of the cache item
     */
    private function AddItemToCache($cache_key, $product)
    {
        //Put the product in cache with the assigned key for 60 minutes
        Cache::put($cache_key, $product, now()->addMinutes(60));
    }
}
