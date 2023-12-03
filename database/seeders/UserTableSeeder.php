<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker  = Faker::create('en');
        $user   = [];
        $status = ['active', 'inactive'];

        for ($i = 0; $i < 10; $i++) {
            $user[] = [
                'name'     => $faker->name,
                'phone'    => $faker->phoneNumber(),
                'email'    => $faker->unique()->email,
                'password' => Hash::make('password'),
                'address'  => $faker->address(),
                'status'   => $status[rand(0, 1)],
            ];
        }

        DB::table('users')->insert($user);

    }
}
