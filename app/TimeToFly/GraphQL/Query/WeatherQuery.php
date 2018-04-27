<?php

namespace App\TimeToFly\GraphQL\Query;

use App\TimeToFly\Models\Point;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class WeatherQuery extends Query
{
    protected $attributes = [
        'name' => 'weather'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Point'));
    }

    public function args()
    {
        return [
            'state' => [
                'name' => 'state',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['state'])) {
            return Point::where('state', $args['state'])->get();
        } else {
            return Point::all();
        }
    }
}
