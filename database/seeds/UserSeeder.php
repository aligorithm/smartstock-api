<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
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
        $user = User::create([
            'name' => "Bossman",
            'email' => "bossman",
            'phone' => "09090909090",
            'role' => "manager",
            'password' => Hash::make("boss"),
        ]);
        $user->roles()->attach(Role::where("name", "manager")->first());
        \App\Customer::create([
            'name' => "Random",
            'email' => "random",
            'address' => "random",
            'phone' => "09090909090",
        ]);
    }
}
