<?php

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Torino Centrale',
                'arrival_station' => 'Firenze S. Maria Novella',
                'departure_time' => '15:20',
                'arrival_time' => '18:45',
                'train_code' => '123HTU64DD8',
                'carriages' => 12,
                'in_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma Centrale',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '6:05',
                'arrival_time' => '10:45',
                'train_code' => '123HUT94DD8',
                'carriages' => 10,
                'in_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Torino Centrale',
                'departure_time' => '18:40',
                'arrival_time' => '19:45',
                'train_code' => '100FTT64DD8',
                'carriages' => 11,
                'in_time' => true,
                'canceled' => false,
            ]
        ];
    }
}
