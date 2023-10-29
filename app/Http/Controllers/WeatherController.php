<?php

namespace App\Http\Controllers;

use App\Service\WeatherService;
use Inertia\Inertia;

class WeatherController extends Controller {
    public function __construct(private WeatherService $weatherService) {}
    
    public function index() {
        $weatherDTOs = $this->weatherService->getWeatherData();
        return Inertia::render('Weather', ['weatherDTOs' => $weatherDTOs]);
    }
    
    public function refreshWeather() {
        $weatherDTOs = $this->weatherService->getWeatherData();
        return response()->json(['weatherDTOs' => $weatherDTOs])->setStatusCode(200);
    }
}
