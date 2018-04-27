<?php


namespace App\TimeToFly\WeatherApi;


use lfischer\wunderground\API;

class WundergroundApi implements WeatherApiInterface
{
    private $api;

    public function __construct(API $api)
    {
        $this->api = $api;
    }

    public function getByCoordinates(string $latitude, string $longitude) : array
    {
        $this->api->setFeatures([
            'conditions'
        ]);
        return $this->api->getByCoordinates($latitude, $longitude);
    }
}
