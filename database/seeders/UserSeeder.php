<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::create([
            'name' => 'Celia Munoz Barca',
            'email' => 'test@test.test',
            'password' =>bcrypt('testtest')
        ]);
        User::factory(10)->create();
    }
}
