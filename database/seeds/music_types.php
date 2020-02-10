<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class music_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('music_types')->insert(
            [
                [
                    'name' => '90-2000s',
                ],
            ]);
        DB::table('music_types')->insert(
            [
                [
                    'name' => 'BRIT-POP',
                    'parent_id' => 1
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'GRUNGE',
                    'parent_id' => 3
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'Hard Rock',
                    'parent_id' => 2
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'Heavy Metal',
                    'parent_id' => 5
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'Power Metal',
                    'parent_id' => 6,
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'Old School Rap',
                    'parent_id' => 2,
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'HIP-HOP',
                    'parent_id' => 8
                ],
            ]);

        DB::table('music_types')->insert(
            [
                [
                    'name' => 'TRAP',
                    'parent_id' =>9
                ],
            ]);

    }
}
