<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(IngDatabaseSeeder::class);
        $this->call(CateDatabaseSeeder::class);
        $this->call(UserDatabaseSeeder::class);
        $this->call(PostDatabaseSeeder::class);
    }
}
