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
                'description' => 'Speed of the gusts of wind that occur.'
            ],
            'windSpeed' => [
                'type' => Type::float(),
                'description' => 'Speed that the wind is traveling.'
            ],
            'windDirection' => [
                'type' => Type::float(),
                'description' => 'Direction that the wind is blowing.'
            ],
            'windDegrees' => [
                'type' => Type::float(),
                'description' => 'Degree of orientation that the wind is blowing.'
            ],
            'feelsLike' => [
                'type' => Type::string(),
                'description' => 'What the weather feels like if you were at the location.'
            ],
            'visibility' => [
                'type' => Type::string(),
                'description' => 'How far and well you can see.'
            ],
            'conditions' => [
                'type' => Type::string(),
                'description' => 'Conditions eg: Sunny, Partly Cloudy'
            ],
            'observationTime' => [
                'type' => Type::string(),
                'description' => 'Time of last observation.'
            ],
            'uv' => [
                'type' => Type::string(),
                'description' => 'Time of last observation.'
            ],
        ];
    }

    public function resolveObservationTimeField($root, $args)
    {
        return $root->observation_time;
    }

    public function resolveWindGustField($root, $args)
    {
        return $root->wind_gust_speed;
    }

    public function resolveFeelsLikeField($root, $args)
    {
        return $root->feels_like_temperature;
    }

    public function resolveWindDegreesField($root, $args)
    {
        return $root->wind_degrees;
    }

    public function resolveWindDirectionField($root, $args)
    {
        return $root->wind_direction;
    }

    public function resolveWindSpeedField($root, $args)
    {
        return $root->wind_speed;
    }
}
