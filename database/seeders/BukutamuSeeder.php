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
      'name' => 'TESING NAMA',
      'thumbnail' => '',
      'instansi' => 'TESTING INSTANSI',
      'perihal' => 'TESTING PERIHAL',
      'tujuan' => 'TESTING TUJUAN',
      'keterangan' => 'TESTING KET'
    ]);
  }
}
