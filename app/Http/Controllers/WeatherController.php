<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
    //
    // $response->body() : string;
    // $response->json($key = null, $default = null) : mixed;
    // $response->object() : object;
    // $response->collect($key = null) : Illuminate\Support\Collection;
    // $response->status() : int;
    // $response->successful() : bool;
    // $response->redirect(): bool;
    // $response->failed() : bool;
    // $response->clientError() : bool;
    // $response->header($header) : string;
    // $response->headers() : array;


    public function get(Request $request){
        try {
 // dd($request);
        //https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m
        
        $response = Http::get('https://api.open-meteo.com/v1/forecast', [
            'latitude' => '41.093371528249584',
            'longitude' => '-85.15165588938919',
            'current' => 'temperature_2m',
            // 'daily' => 'precipitation_sum',
            'timezone' => 'America/New_York',
            'temperature_unit' => 'fahrenheit'
        ]);
        // dd($response->json());
        return view('weather', ['data' => json_encode($response->json())]);
        } catch (\Exception $ex){
            return Response($ex->getMessage(), 500);
            dd($ex);
        }
       
    }
}


