<?php


namespace App\TimeToFly\WeatherApi;


use lfischer\wunderground\API;

class WeatherApiFactory
{
    const API_WUNDERGROUND = 'Weather Underground API';

    public static function create(string $apiType, string $apiKey)
    {
        switch($apiType) {
            case self::API_WUNDERGROUND:
                return new WundergroundApi(new API($apiKey));
                break;
            default:
                throw new \Exception(sprintf('Weather API "%s" not supported.', $apiType));
        }
    }
}
