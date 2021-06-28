<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    const KELVIN = 273;

    function getCurrentWeather(Request $request)
    {
        $city = $request->city ?? 'hanoi';
        $res = Http::get('https://api.openweathermap.org/data/2.5/weather?q=hanoi&appid=5b20d66c3636b1cd27d59d2b4ea92bd8');
        $content = $res->body();

//        dd($content);
        $data = json_decode($content);
//        dd($data);
        $temp = floor($data->main->temp - self::KELVIN);
        $nameCity = $data->name;
        $windSpeed = $data->wind->speed * 3.6;
        $weather = $data->weather[0]->main;
        $humidity = $data->main->humidity;
        return view('weathers.current', compact('temp', 'nameCity', 'windSpeed', 'weather', 'humidity'));
    }
}
