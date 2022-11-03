<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        role::create([
            'slug' => 'kadin',
            'level' => 'kadin'
        ]);
        role::create([
            'slug' => 'kabid',
            'level' => 'kabid'
        ]);

        role::create([
            'slug' => 'admin',
            'level' => 'admin'
        ]);

        role::create([
            'slug' => 'tamu',
            'level' => 'tamu'
        ]);
    }
}
