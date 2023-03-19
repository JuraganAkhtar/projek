<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level'=> 'admin',
            'username'=>'admin',
            'password'=> bcrypt('password'),
            'nik'=> '12345',
            'telp'=> '08125417858',
            'nama'=> 'akhtar',
        ]);
    }
}
