<?php

namespace App\TimeToFly\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherStation extends Model
{
    protected $table = 'weather_stations';

    public function scopeIsWithinMaxDistance($query, $latitude, $longitude, $radius = 5) {

        $haversine = "(3959 * acos(cos(radians(" . $latitude . ")) 
                    * cos(radians(`latitude`)) 
                    * cos(radians(`longitude`) 
                    - radians(" . $longitude . ")) 
                    + sin(radians(" . $latitude . ")) 
                    * sin(radians(`latitude`))))";

        return $query->select('id', 'latitude', 'longitude', 'city', 'state')
            ->selectRaw("{$haversine} AS distance")
            ->whereRaw("{$haversine} < ?", [$radius]);
    }
}
