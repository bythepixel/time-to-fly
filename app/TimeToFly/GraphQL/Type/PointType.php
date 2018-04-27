<?php

namespace App\TimeToFly\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class PointType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Point',
        'description' => 'Weather at a lat/lng location'
    ];

    /*
    * Uncomment following line to make the type input object.
    * http://graphql.org/learn/schema/#input-types
    */
    //protected $inputObject = true;

    public function fields()
    {
        return [
            'state' => [
                'type' => Type::string(),
                'description' => 'State'
            ],
            'observed_latitude' => [
                'type' => Type::string(),
                'description' => 'Latitude at Observation Point'
            ],
            'observed_longitude' => [
                'type' => Type::string(),
                'description' => 'Longitude at Observation Point'
            ],
            'observation_time' => [
                'type' => Type::string(),
                'description' => 'Time of observation'
            ],
            'temperature' => [
                'type' => Type::string(),
                'description' => 'Temperature in F'
            ],
            'wind' => [
                'type' => Type::string(),
                'description' => 'Wind Speed'
            ],
            'wind_gust' => [
                'type' => Type::string(),
                'description' => 'Wind Gust Speed'
            ],
            'conditions' => [
                'type' => Type::string(),
                'description' => 'Conditions eg: Sunny, Partly Cloudy'
            ],
            'sunrise' => [
                'type' => Type::string(),
                'description' => 'Time of Sunrise'
            ],
            'sunset' => [
                'type' => Type::string(),
                'description' => 'Time of Sunset'
            ]
        ];
    }
}
