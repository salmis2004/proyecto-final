<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('WEATHER_API_KEY');
    }

    public function getWeather($city)
    {
        $response = Http::get("http://api.weatherapi.com/v1/current.json", [
            'key' => $this->apiKey,
            'q' => $city,
            'lang' => 'es'
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return ['error' => 'No se pudo obtener el clima'];
    }
}
