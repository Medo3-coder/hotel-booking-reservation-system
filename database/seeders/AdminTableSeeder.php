<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en');
        $admins = [];
        for($i = 0; $i < 10 ; $i++) {
            $admins[] =[
                'name'         => $faker->name,
                'phone'        => $faker->phoneNumber(),
                'email'        => $faker->unique()->email,
                'password'     =>  Hash::make('password'),
                'is_blocked'    =>  0,
                'is_notify'    => rand(0 , 1),
            ];
        };

        DB::table('admins')->insert($admins);
    }
}
