<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ResourcesController extends Controller
{
    /**
     * Gets all resources used in the application
     * 
     * @return String JSON string with the result of the request.
     */
    public function GetAllResources() 
    {
        $cache_key = 'all-resources';
        //Check if items exist in cache
        $resources_exist = Cache::has($cache_key);

        //If not
        if (!$resources_exist) 
        {
            $resources = $this->PassAllResources();
            //Otherwise put the resources in cache with the assigned key for 60 minutes
            Cache::put($cache_key, $resources, now()->addMinutes(60));
            //Return resources with 200 status code
            return response()->json(['result' => $resources], 200);
        }
        else 
        {
            //Get resources from cache
            $resources = Cache::get($cache_key);
            //Return resources with 200 status code
            return response()->json(['result' => $resources], 200);
        }
    }

    /**
     * Grab all resources used from all different sources
     * 
     * @return Array An array that contains all the resources.
     */
    private function PassAllResources()
    {
        $unsplash = $this->Unsplash();
        $danskVindenergiAps = $this->DanskVindenergiAps();
        $wiki = $this->Wikipedia();
        $europeSolarStore = $this->EuropeSolarStore();
        return array($unsplash, $danskVindenergiAps, $wiki, $europeSolarStore);
    }

    /**
     * Grab all resources used from https://unsplash.com/
     */
    public function Unsplash()
    {
        $website = array(
            'name' => 'Unsplash',
            'url' => 'https://unsplash.com/',
        );

        $index = array(  
            'url' => '/',
            'resource_path' => '\index',
        );

        $data = [
            'website_name' => $website['name'],
            'website_url' => $website['url'],
            'resources' => [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#statements',
                'author_name' => 'Connor Lunsford',
                'author_url' => $website['url'].'@connorlunsford',
                'resource_name' => 'White Sports Cars Moore',
                'resource_url' => $website['url'].'photos/EmZnKnVt4qs',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'cars',
            ],
            [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#about',
                'author_name' => 'Appolinary Kalashnikova',
                'author_url' => $website['url'].'@appolinary_kalashnikova',
                'resource_name' => 'Valley of windmills',
                'resource_url' => $website['url'].'photos/WYGhTLym344',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'main',
            ],
            [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#statements',
                'author_name' => 'Waldemar Brandt',
                'author_url' => $website['url'].'@waldemarbrandt67w',
                'resource_name' => 'wind turbine in landscape',
                'resource_url' => $website['url'].'photos/8NBACfGMFtw',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'windmill',
            ],
            [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#our-mission',
                'author_name' => 'Rabih Shasha',
                'author_url' => $website['url'].'@rabihshasha',
                'resource_name' => '',
                'resource_url' => $website['url'].'photos/tTv6Lo5uQVQ',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'our-mission-windmills',
            ],
            [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#our-mission',
                'author_name' => 'Nuno Marques',
                'author_url' => $website['url'].'@logvisuals',
                'resource_name' => '',
                'resource_url' => $website['url'].'photos/0GbrjL3vZF4',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'roof',
            ],
            [
                'page_used' => $index['url'],
                'section_used' => $index['url'].'#statements',
                'author_name' => 'Chelsea',
                'author_url' => $website['url'].'@chelseadeeyo',
                'resource_name' => '',
                'resource_url' => $website['url'].'photos/WvusC5M-TM8',
                'resource_path' => $index['resource_path'],
                'resource_filename' => 'solarpanels',
            ],

        ];
        return $data;
    }

    /**
     * Grab all resources used from http://www.dansk-vindenergi.dk/
     */
    public function DanskVindenergiAps()
    {
        $website = array(
            'name' => 'Dansk Vindenergi Aps',
            'url' => 'http://www.dansk-vindenergi.dk/',
        );

        $products = array(
            'url' => '/products',
            'resource_path' => '\products\wind-turbines',
        );

        $data = [
            'website_name' => $website['name'],
            'website_url' => $website['url'],
            'resources' => [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Micon M530 250 kW',
                'resource_url' => $website['url'].'?show=page&id=2372',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Micon_M530',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Bonus 150 kW',
                'resource_url' => $website['url'].'print.asp?id=2322',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'AN_Bonus_150kW',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Micon M450 250 KW',
                'resource_url' => $website['url'].'print.asp?id=2390',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Micon_M450',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Spare parts for Micon M750 400 kW turbine',
                'resource_url' => $website['url'].'default.asp?show=page&id=2389',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Micon_M750',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Micon M1500 600 kW',
                'resource_url' => $website['url'].'print.asp?id=2388',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Micon_M1500',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Nordtank 150 kW XLR',
                'resource_url' => $website['url'].'print.asp?id=2368',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Nordtank_150',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'Vestas V25 200 kW',
                'resource_url' => $website['url'].'print.asp?id=2370',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Vestas_V25',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#wind-turbines',
                'author_name' => $website['name'],
                'author_url' => $website['url'],
                'resource_name' => 'WindWorld W-2700/150kW',
                'resource_url' => $website['url'].'default.asp?show=page&id=2337',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'WindWorld_W-2700',
            ],
        ];
        return $data;
    }

    /**
     * Grab all resources used from https://commons.wikimedia.org/
     */
    public function Wikipedia()
    {
        $website = array(
            'name' => 'Wikipedia / Wikimedia Commons',
            'url' => 'https://commons.wikimedia.org/',
        );

        $products = array(
            'url' => '/products',
            'resource_path' => '\products\cars',
        );

        $userpage = $website['url'].'wiki/User:';
        $filepage = $website['url'].'wiki/File:';

        $data = [
            'website_name' => $website['name'],
            'website_url' => $website['url'],
            'resources' => [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Vauxford',
                'author_url' => $userpage.'Vauxford',
                'resource_name' => '2020 Audi e-Tron Sport 50 Quattro',
                'resource_url' => $filepage.'2020_Audi_e-Tron_Sport_50_Quattro.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => '2020_Audi_e-Tron_Sport_50_Quattro',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Alexander Migl',
                'author_url' => $userpage.'Alexander-93',
                'resource_name' => 'Citroen C4 (2020) IMG 4202',
                'resource_url' => $filepage.'Citroen_C4_(2020)_IMG_4202.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Citroen_C4_(2020)_IMG_4202',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Vauxford',
                'author_url' => $userpage.'Vauxford',
                'resource_name' => '2019 DS DS3 Crossback Performance Line PureTech 1.2 Front',
                'resource_url' => $filepage.'2019_DS_DS3_Crossback_Performance_Line_PureTech_1.2_Front.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => '2019_DS_DS3_Crossback_Performance_Line_PureTech_1.2_Front',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Daniel Przygoda',
                'author_url' => 'https://www.instagram.com/daniel.przygoda/',
                'resource_name' => 'Fiat-500-vorne2',
                'resource_url' => $filepage.'Fiat-500-vorne2.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Fiat-500-vorne2',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'M 93',
                'author_url' => $userpage.'M_93',
                'resource_name' => 'Honda e Advance – f 18102020',
                'resource_url' => $filepage.'Honda_e_Advance_–_f_18102020',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Honda_e_Advance_-_f_18102020',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Vauxford',
                'author_url' => $userpage.'Vauxford',
                'resource_name' => '2019 Hyundai Kona Premium 1.0',
                'resource_url' => $filepage.'2019_Hyundai_Kona_Premium_1.0.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => '2019_Hyundai_Kona_Premium_1.0',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Alexander Migl',
                'author_url' => $userpage.'Alexander-93',
                'resource_name' => 'Kia EV6 Auto Zuerich 2021 IMG 0161',
                'resource_url' => $filepage.'Kia_EV6_Auto_Zuerich_2021_IMG_0161.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Kia_EV6_Auto_Zuerich_2021_IMG_0161',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Alexander Migl',
                'author_url' => $userpage.'Alexander-93',
                'resource_name' => 'Lexus UX 250h IMG 2810',
                'resource_url' => $filepage.'Lexus_UX_250h_IMG_2810.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Lexus_UX_250h_IMG_2810',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'Alexander Migl',
                'author_url' => $userpage.'Alexander-93',
                'resource_name' => 'Mercedes-Benz H243 IMG 4476',
                'resource_url' => $filepage.'Mercedes-Benz_H243_IMG_4476.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Mercedes-Benz_H243_IMG_4476',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $products['url'].'#cars',
                'author_name' => 'M 93',
                'author_url' => $userpage.'M_93',
                'resource_name' => 'Polestar 2 – f 02042021',
                'resource_url' => $filepage.'Polestar_2_–_f_02042021.jpg',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Polestar_2_–_f_02042021',
            ],     
        ];
        return $data;
    }

    /**
     * Grab all resources used from https://www.europe-solarstore.com/
     */
    public function EuropeSolarStore()
    {
        $website = array(
            'name' => 'Europe-SolarStore',
            'url' => 'https://www.europe-solarstore.com/',
        );

        $products = array(
            'url' => '/products',
            'resource_path' => '\products\solar-panels',
        );

        $section = $products['url'].'#solar-panels';

        $data = [
            'website_name' => $website['name'],
            'website_url' => $website['url'],
            'resources' => [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'Panasonic',
                'author_url' => 'https://www.panasonic.com/',
                'resource_name' => 'Panasonic VBHN325SJ47',
                'resource_url' => $website['url'].'panasonic-vbhn325sj47.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Panasonic_VBHN325SJ47',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'BenQ',
                'author_url' => 'https://www.benq.com/',
                'resource_name' => 'BenQ SunForte PM096B00-335 W',
                'resource_url' => $website['url'].'benq-sunforte-pm096b00-335-w.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'BenQ_SunForte_PM096B00-335W',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'BenQ',
                'author_url' => 'https://www.benq.com/',
                'resource_name' => 'BenQ SunVivo PM060MW2-300 W',
                'resource_url' => $website['url'].'benq-sunvivo-pm060mw2-300-w.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'BenQ_SunVivo_PM060MW2-300W',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'BenQ',
                'author_url' => 'https://www.benq.com/',
                'resource_name' => 'BenQ SunVivo PM060MB2-300 W',
                'resource_url' => $website['url'].'benq-sunvivo-pm060mb2-300-w.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'BenQ_SunVivo_PM060MB2-300W',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'LG',
                'author_url' => 'https://www.lg.com/',
                'resource_name' => 'LG Neon R LG360Q1C-A5',
                'resource_url' => $website['url'].'lg-neon-r-lg360q1c-a5.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'LG_Neon_R_LG360Q1C-A5',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'LG',
                'author_url' => 'https://www.lg.com/',
                'resource_name' => 'LG MonoX Plus LG300S1C-A5',
                'resource_url' => $website['url'].'lg-monox-plus-lg295s1c-a5-182.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'LG_MonoX_Plus_LG300S1C-A5',
            ],
            [
                'page_used' => $products['url'],
                'section_used' => $section,
                'author_name' => 'Sharp',
                'author_url' => 'https://www.sharp.nl/',
                'resource_name' => 'Sharp NU-AF370',
                'resource_url' => $website['url'].'sharp-nu-af370.html',
                'resource_path' => $products['resource_path'],
                'resource_filename' => 'Sharp_NU-AF370',
            ],
        ];
        return $data;
    }
}
