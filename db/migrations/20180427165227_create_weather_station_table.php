<?php


use Phinx\Migration\AbstractMigration;

class CreateWeatherStationTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // create the table
        $table = $this->table('weather_reports');
        $table->addColumn('weather_station_id', 'integer')
            ->addForeignKey('weather_station_id', 'weather_stations', 'id')
            ->addColumn('observation_time', 'string')
            ->addColumn('temperature', 'string')
            ->addColumn('wind_string', 'string')
            ->addColumn('wind_direction', 'string')
            ->addColumn('wind_degrees', 'string')
            ->addColumn('wind_speed', 'string')
            ->addColumn('wind_gust_speed', 'string')
            ->addColumn('feels_like_temperature', 'string')
            ->addColumn('visibility', 'string')
            ->addColumn('uv', 'string')
            ->addColumn('conditions', 'string')
            ->create();
    }
}
