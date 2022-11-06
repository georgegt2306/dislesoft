<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all()->pluck('name')->toArray();
        unset($roles[0]);
        for ($i=0; $i < 20; $i++)
        { 
            $faker = Faker::create('es EC');
            $rol = $faker->randomElement($roles);
            $user = New User;
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = bcrypt('password');
            $user->save();
            $user->assignRole($rol);
        }
    }
}
