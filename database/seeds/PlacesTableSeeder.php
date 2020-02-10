<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert(
            [
                [
                    'name' => 'Дворец Спорта',
                    'address' => 'пр-т. Победителей 4, г.Минск,'
                ],
                [
                    'name' => 'Минск Арена',
                    'address' => 'пр-т. Победителей 111, Минск'
                ],
                [
                    'name' => 'PRIME HALL',
                    'address' => 'пр-т. Победителей 65, Минск'
                ],
                [
                    'name' => 'Стадион динамо',
                    'address' => 'ул. Кирова 8, Минск'
                ],
                [
                    'name' => 'Клуб Republic',
                    'address' => 'ул. Кирова 65, Минск'
                ],
            ]
        );
    }
}
