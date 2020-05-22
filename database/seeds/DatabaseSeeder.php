<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopsTableSeeder::class);
        $this->call(ReservesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
