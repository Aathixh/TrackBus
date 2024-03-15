<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locate()
    {

        $apiKey = 'GXHH4D204XVSA1LO';
        $url = "https://api.thingspeak.com/channels/2375849/feeds.json?api_key=GXHH4D204XVSA1LO&results=2 ";

        $client = new Client();

        $response = Http::get($url, ['api_key' => $apiKey, 'results' => 1]);


        $data = $response->json();

        // Assuming latitude and longitude are fields in the 'feeds' array
        $latitude = $data['feeds'][0]['field1']; // Change 'field1' to your actual field name
        $longitude = $data['feeds'][0]['field2']; // Change 'field2' to your actual field name

        return view('locate')->with(['latitude' => $latitude, 'longitude' => $longitude]);

    }
    public function local()
    {
        return view('localbus');
    }
}