<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function displayLocationDetails(){
        $location = [
            "name"=>"Dhaka",
            "country"=>"Bangladesh",
            "population"=>"20000000",
            "timezone"=>"GMT+6",
        ];
        return $location;
    }

    function location(){
        $location = [
            "name"=>"istanbul",
            "country"=>"Bangladesh",
            "population"=>"20000000",
            "timezone"=>"GMT+6",
        ];
        $seasons = ['Summer','Winter','Autumn', 'Spring'];
        // return view("lc",["location"=>$location,]);
        // return view("lc",["name"=>"Dhaka", "country"=>"Bangladesh","population"=>"20000000","timezone"=>"GMT+6",]);
        // return view("lc", $location);

        // return view("lc", compact("location", "seasons"));

        return view("lc",['location'=>$location, 'seasons'=>$seasons]);
    }

    // function weather($location, $country){
    function weather($location){
        $response = Http::timeout(20)->retry(3, 2000)->get("https://wttr.in/{$location}?format=j1");
        // $response = Http::retry(3, 2000)->get("https://wttr.in/{$location}?format=j1");

        $weatherDetails = $response->json();

        $currentTemp = $weatherDetails["current_condition"][0]["temp_C"];
        $currentCondition = $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];
        // return $weatherDetails;

        return view("weather", compact("currentTemp", "currentCondition", "location"));
    }
}
