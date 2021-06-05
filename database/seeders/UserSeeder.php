<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::create([
            'name' => "Jhonny",
            'name2' => "Orlando",
            'lastname' => "Guerrero",
            'lastname2' => "Matabanchoy",
            'email' => "jhorguma@gmail.com",
            'password' => bcrypt('admin1234')
        ]);
        user::factory(99)->create();
    }
}
