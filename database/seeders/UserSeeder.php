<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Faker\Provider\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 100; $i++) {
            UserModel::create([
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'phone' => PhoneNumber::numerify("0#########")
            ]);
        }
    }
}
