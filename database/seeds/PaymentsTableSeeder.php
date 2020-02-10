<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('payments')->insert(
            [
                [
                    'name' => 'Master Card',
                ],
                [
                    'name' => 'Visa',
                ],
                [
                    'name' => 'Ерип',
                ],
            ]
        );
    }
}
