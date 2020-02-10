<?php

use Illuminate\Database\Seeder;

class ConcertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('concerts')->insert(
            [
                [
                    'title' => 'LINDEMANN',
                    'music_type_id' =>5
                ],
                [
                    'title' =>'Макс Барских',
                    'music_type_id' =>5
                ],
                [
                    'title' => 'Ляпис 98',
                    'music_type_id' =>4
                ],
                [
                    'title' => 'Ирина Аллегрова',
                    'music_type_id' =>4
                ],
                [
                    'title' => 'HammAli & Navai',
                    'music_type_id' =>4
                ],
                [
                    'title' => 'JONY, ELMAN, ANDRO',
                    'music_type_id' =>5
                ],
                [
                    'title' => 'Полина Гагарина',
                    'music_type_id' =>5
                ],
                [
                    'title' => 'MONATIK',
                    'music_type_id' =>6
                ],
                [
                    'title' => 'Дискотека СССР',
                    'music_type_id' =>6
                ],
                [
                    'title' => 'Димаш Кудайберген',
                    'music_type_id' =>6
                ],
                [
                    'title' => 'Nothing But Thieves',
                    'music_type_id' =>7
                ],
                [
                    'title' => 'Мот',
                    'music_type_id' =>8
                ],
                [
                    'title' => 'Би-2',
                    'music_type_id' =>9
                ]
            ]
        );
    }
}
