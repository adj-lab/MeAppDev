<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\WeightLog;

class WeightLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Userデータ取得
        $user = User::first();

        //WeithgLogsデータをFactoryで作成
        WeightLog::factory()->count(35)->create([
            'user_id' => $user->id
        ]);
    }
}
