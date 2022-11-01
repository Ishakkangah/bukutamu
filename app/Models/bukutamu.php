<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'instansi', 'perihal', 'tujuan', 'keterangan'];
}
