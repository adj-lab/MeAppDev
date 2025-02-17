<?php

namespace Database\Seeders;

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
        // UserTableSeederを実行
        $this->call(UsersTableSeeder::class);
        // WeightLogsTableSeederを実行
        $this->call(WeightLogsTableSeeder::class);
    }
}
