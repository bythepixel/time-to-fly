<?php

namespace App\TimeToFly\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class PointType extends GraphQLType
{
    protected $attributes = [
        'observed_latitude' => 'Observed Latitude',
        'observed_longitude' => 'Observed Latitude',
        'observation_time' => 'Observation Time',
        'temperature' => 'Temperature',
        'wind_mph' => 'Wind Speed',
        'wind_gust_mph' => 'Wind Gust Speed',
        'conditions' => 'Conditions',
        'sunrise' => 'Sunrise',
        'sunset' => 'Sunset',
    ];

    /*
    * Uncomment following line to make the type input object.
    * http://graphql.org/learn/schema/#input-types
    */
    // protected $inputObject = true;

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of user'
            ]
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    protected function resolveEmailField($root, $args)
    {
        return strtolower($root->email);
    }
}
