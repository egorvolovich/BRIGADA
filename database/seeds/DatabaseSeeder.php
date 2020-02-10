<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            music_types::class,
            ConcertTableSeeder::class,
            PlacesTableSeeder::class,
            OrdersTableSeeder::class,
            PaymentsTableSeeder::class,
            EventsTableSeeder::class,
            UserPaymentsTableSeeder::class,
            UsersTableSeeder::class,

        ]);
    }
}
