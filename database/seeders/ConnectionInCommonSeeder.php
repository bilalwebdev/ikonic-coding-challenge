<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommonConnection;
use Carbon\Carbon;

class ConnectionInCommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommonConnection::firstOrCreate([
            'first_user_id' => 12,
            'second_user_id' => 1,
            'common_user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        CommonConnection::firstOrCreate([
            'first_user_id' => 2,
            'second_user_id' => 1,
            'common_user_id' => 12,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        CommonConnection::firstOrCreate([
            'first_user_id' => 5,
            'second_user_id' => 4,
            'common_user_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        CommonConnection::firstOrCreate([
            'first_user_id' => 1,
            'second_user_id' => 10,
            'common_user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        CommonConnection::firstOrCreate([
            'first_user_id' => 4,
            'second_user_id' => 1,
            'common_user_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
