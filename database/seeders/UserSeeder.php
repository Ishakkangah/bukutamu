<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Kadin',
            'role_id' => 1,
            'username' => 'kadin',
            'email' => 'kadin@kadin.test',
            'password' => bcrypt('kadin'),
        ]);
        User::create([
            'name' => 'Kabid',
            'role_id' => 2,
            'username' => 'kabid',
            'email' => 'kabid@kabid.test',
            'password' => bcrypt('kabid'),
        ]);
        User::create([
            'name' => 'Admin',
            'role_id' => 3,
            'username' => 'admin',
            'email' => 'admin@admin.test',
            'password' => bcrypt('admin'),
        ]);
    }
}
