<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\UserModel;

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
        UserModel::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123admin.')
        ]);
    }
}
