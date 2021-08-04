<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'full_name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'0987987987',
            'password'=>Hash::make('123456'),
            'created_at'=>'2021-01-01'
        ]);
    }
}
