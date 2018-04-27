<?php

namespace App\TimeToFly\GraphQL\Type;

use App\TimeToFly\Models\WeatherReport;
use App\TimeToFly\Models\WeatherStation;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class WeatherStationType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Weather Station',
        'description' => 'Weather at a latitude/longitude location'
    ];

    /*
    * Uncomment following line to make the type input object.
    * http://graphql.org/learn/schema/#input-types
    */
    //protected $inputObject = true;

    public function fields()
    {
        return [
            'latitude' => [
                'type' => Type::string(),
                'description' => 'Latitude at Observation Point'
            ],
            'longitude' => [
                'type' => Type::string(),
                'description' => 'Longitude at Observation Point'
            ],
            'city' => [
                'type' => Type::string(),
                'description' => 'City'
            ],
            'state' => [
                'type' => Type::string(),
                'description' => 'State'
            ],
            'weatherReports' => [
                'type'        => Type::listOf(GraphQL::type('WeatherReport')),
                'description' => 'List of weather reports associated with a weather station.',
            ],
        ];
    }

    public function resolveWeatherReportsField($root, $args)
    {
        return WeatherReport::where('weather_station_id', $root->id)->limit(10)->get();
    }
}
