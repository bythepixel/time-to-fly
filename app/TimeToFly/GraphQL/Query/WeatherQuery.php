<?php

namespace App\TimeToFly\GraphQL\Query;

use App\TimeToFly\Models\WeatherStation;
use App\TimeToFly\WeatherApi\WeatherApiFactory;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use Illuminate\Support\Facades\Config;

/**
 * Class WeatherQuery
 *
 * Example Query: /graphql?query=query+FetchWeather{weather(latitude:"a",longitude:"b"){weatherReports{conditions}}}
 *
 * @package App\TimeToFly\GraphQL\Query
 */
class WeatherQuery extends Query
{
    protected $attributes = [
        'name' => 'weather'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('WeatherStation'));
    }

    public function args()
    {
        return [
            'latitude' => [
                'name' => 'latitude',
                'type' => Type::string(),
            ],
            'longitude' => [
                'name' => 'longitude',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $api = WeatherApiFactory::create(WeatherApiFactory::API_WUNDERGROUND, getenv('WUNDERGROUND_API_KEY'));
        $beacons = $api->getByCoordinates($args['latitude'], $args['longitude']);
        dd($beacons);

        $this->checkForArgs($args);

        return WeatherStation::isWithinMaxDistance((int)$args['latitude'], (int)$args['longitude'], 40)->get();
    }

    private function checkForArgs(array $args)
    {
        if(!isset($args['latitude']) || !isset($args['longitude'])) {
            throw new \Exception('You must provide longitude and latitude dummy.');
        }
    }
}
