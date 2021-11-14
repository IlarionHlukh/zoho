<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(['id' => 1], [
            'email'      => 'admin@test.com',
            'password'   => Hash::make('password'),
            'created_at' => $now = Carbon::now(),
            'updated_at' => $now
        ]);
    }
}
