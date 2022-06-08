<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoDataController extends Controller
{
    public function show($route) {        
        $existingRoutes = array('green', 'red', 'blue', 'yellow');
        if(in_array($route, $existingRoutes)){
            return \App\Models\GeoData::select('route', 'geo_data')->where('route', $route)->get()->first();
        } else {
            return '404 Error -> Unknown route';
        }
    }
}
