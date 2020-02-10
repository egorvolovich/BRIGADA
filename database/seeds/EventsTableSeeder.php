<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert(
            [
                [
                    'place_id' => 1,
                    'concert_id' => 1,
                    'price' => 49,
                    'img' => '17.jpg',
                    'concert_date' => '2020-03-20',
                    'is_popular' => 0,
                    'count_sell'=> 453,
                    'limit' => 1200,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 2,
                    'price' => 74,
                    'img' => '1.jpg',
                    'concert_date' => '2020-02-29',
                    'is_popular' => 0,
                    'count_sell'=> 3205,
                    'limit' => 12300,
                ],
                [
                    'place_id' => 3,
                    'concert_id' => 3,
                    'price' => 85,
                    'img' => '12.jpg',
                    'concert_date' => '2019-12-29',
                    'is_popular' => 0,
                    'count_sell'=> 1042,
                    'limit' => 2300,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 4,
                    'price' => 65,
                    'img' => 'ruki.jpg',
                    'concert_date' => '2020-03-07',
                    'is_popular' => 0,
                    'count_sell'=> 2010,
                    'limit' => 7200,
                ],
                [
                    'place_id' => 3,
                    'concert_id' => 5,
                    'price' => 90,
                    'img' => '3.jpg',
                    'concert_date' => '2020-03-20',
                    'is_popular' => 0,
                    'count_sell'=> 565,
                    'limit' => 2500,
                ],
                [
                    'place_id' => 3,
                    'concert_id' => 6,
                    'price' => 80,
                    'img' => '4.jpg',
                    'concert_date' => '2020-02-16',
                    'is_popular' => 0,
                    'count_sell'=> 638,
                    'limit' => 2400,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 7,
                    'price' => 85,
                    'img' => '5.jpg',
                    'concert_date' => '2020-10-16',
                    'is_popular' => 0,
                    'count_sell'=> 2148,
                    'limit' => 5340,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 8,
                    'price' => 93,
                    'img' => 'scorp.jpg',
                    'concert_date' => '2020-10-24',
                    'is_popular' => 0,
                    'count_sell'=> 1320,
                    'limit' => 5000,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 9,
                    'price' => 75,
                    'img' => 'len.jpg',
                    'concert_date' => '2020-02-22',
                    'is_popular' => true,
                    'count_sell'=> 2412,
                    'limit' => 8300,
                ],
                [
                    'place_id' => 2,
                    'concert_id' => 10,
                    'price' => 65,
                    'img' => 'fadeev.jpg',
                    'concert_date' => '2020-04-04',
                    'is_popular' => true,
                    'count_sell'=> 1163,
                    'limit' => 3700,
                ],
                [
                    'place_id' => 3w4,
                    'concert_id' => 11,
                    'price' => 70,
                    'img' => 'rasmus.jpg',
                    'concert_date' => '2020-03-25',
                    'is_popular' => true,
                    'count_sell'=> 1237,
                    'limit' => 4500,
                ],
                [
                    'place_id' => 3,
                    'concert_id' => 12,
                    'price' => 47,
                    'img' => 'olya.jpg',
                    'concert_date' => '2020-03-26',
                    'is_popular' => true,
                    'count_sell'=> 822,
                    'limit' => 2000,
                ],
                [
                    'place_id' => 4,
                    'concert_id' => 13,
                    'price' => 36,
                    'img' => '22.png',
                    'concert_date' => '2020-06-06',
                    'is_popular' => true,
                    'count_sell'=> 3649,
                    'limit' => 14000,
                ],
            ]
        );
    }
}
