<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail',
        'instansi',
        'perihal',
        'tujuan',
        'keterangan',
        'usia',
        'pendidikan',
        'jenis_kelamin',
        'pekerjaan'
    ];

    // RETURN PHOTO
    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->thumbnail;
    }
}
