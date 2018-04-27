<?php


use Phinx\Seed\AbstractSeed;

class WeatherStationSeeder extends AbstractSeed
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
        for ($longitude = 102.03; $longitude <= 107.03; $longitude = $longitude + 0.1) {
            for ($latitude = 37; $latitude <= 41; $latitude = $latitude + 0.1) {
                $data[] = [
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'city' => 'CITYLAND',
                    'state' => 'STATEVILLE',
                ];
            }
        }

        $this->insert('weather_stations', $data);
    }
}
