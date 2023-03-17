<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserConnection;
use Carbon\Carbon;

class ReceiveRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserConnection::firstOrCreate([
            'sender_id' => 1,
            'status' => 2,
            'receiver_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        UserConnection::firstOrCreate([
            'sender_id' => 3,
            'status' => 1,
            'receiver_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        UserConnection::firstOrCreate([
            'sender_id' => 4,
            'status' => 3,
            'receiver_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        UserConnection::firstOrCreate([
            'sender_id' => 1,
            'status' => 2,
            'receiver_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        UserConnection::firstOrCreate([
            'sender_id' => 10,
            'status' => 1,
            'receiver_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
