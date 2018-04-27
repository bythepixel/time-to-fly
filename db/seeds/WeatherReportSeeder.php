<?php

use Phinx\Seed\AbstractSeed;

class WeatherReportSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [];
        for($i = 1; $i < 2041; $i++) {
            $data[] = [
                'weather_station_id' => $i,
                'observation_time' => date('Y-m-d H:i:s'),
                'temperature' => $this->getTemperature(),
                'wind_string' => 'THIS IS DESCRIPTIVE',
                'wind_direction' => $this->getWindDirection(),
                'wind_degrees' => $this->getWindDegrees(),
                'wind_speed' => $this->getWindSpeed(),
                'wind_gust_speed' => $this->getWindSpeed(),
                'feels_like_temperature' => $this->getTemperature(),
                'visibility' => $this->getVisibility(),
                'uv' => $this->getUV(),
                'conditions' => $this->getConditions(),
            ];
        }

        $this->insert('weather_reports', $data);
    }

    private function getTemperature()
    {
        return rand(0, 100);
    }

    private function getWindSpeed()
    {
        return rand(0, 60);
    }

    private function getVisibility()
    {
        return rand(0, 10);
    }

    private function getUV() {
        return rand(0, 10);
    }

    private function getWindDirection()
    {
        $directions = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
        return $directions[rand(0,15)];
    }

    private function getWindDegrees()
    {
        return rand(0, 359);
    }

    private function getConditions()
    {
        $conditions = ['Sunny', 'Partly Cloudy', 'Overcast', 'Rain', 'Thunderstorm', 'Snow', 'Blizzard', 'Apocalypse'];
        return $conditions[rand(0,7)];
    }
}
