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
        // Call data seeders
        $this->call([
            UsersTableSeeder::class,
            ProductsTableSeeder::class,
          ]);
    }
}
