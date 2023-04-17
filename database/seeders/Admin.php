<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Super_Admin',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('123456'),
            'remember_token'=>str::random(10),
            'is_admin'=>1

        ]);
    }
}
