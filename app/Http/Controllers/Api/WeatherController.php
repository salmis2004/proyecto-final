<?php

namespace App\Http\Controllers\Api;
use App\Services\WeatherService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request, WeatherService $weatherService)
    {
        $city = $request->get('city', 'Ciudad de México');
        $weather = $weatherService->getWeather($city);
        return response()->json($weather);
    }
}
