<?php


namespace App\TimeToFly\GraphQL\Type;


use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class WeatherReportType extends GraphQLType
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
            'time' => [
                'type' => Type::string(),
                'description' => 'Time of observation'
            ],
            'temperature' => [
                'type' => Type::float(),
                'description' => 'Temperature in F'
            ],
            'wind' => [
                'type' => Type::float(),
                'description' => 'Wind Speed'
            ],
            'windGust' => [
                'type' => Type::float(),
                'description' => 'Wind Gust Speed'
            ],
            'conditions' => [
                'type' => Type::string(),
                'description' => 'Conditions eg: Sunny, Partly Cloudy'
            ]
        ];
    }

    public function resolveWindGustField($root, $args)
    {
        return $root->wind_gust_speed;
    }
}
