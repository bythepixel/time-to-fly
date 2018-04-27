<?php


namespace App\TimeToFly\WeatherApi;


interface WeatherApiInterface
{
    public function getByCoordinates(string $latitude, string $longitude) : array;
}
