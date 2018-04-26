<?php

namespace App\Http\Controllers;

use Folklore\GraphQL\Support\Facades\GraphQL;

class WeatherController extends Controller
{

    /**
     * Index
     */
    public function index()
    {
        $schema = GraphQL::schema();
        echo "test";
    }
}
