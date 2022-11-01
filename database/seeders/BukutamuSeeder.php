<?php

namespace Database\Seeders;

use App\Models\bukutamu;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BukutamuSeeder extends Seeder
{
  public function run()
  {
    bukutamu::create([
      'name' => 'admin',
      'instansi' => 'kominfo',
      'perihal' => 'dukungan',
      'tujuan' => 'menghadiri',
      'keterangan' => ''
    ]);
  }
}
