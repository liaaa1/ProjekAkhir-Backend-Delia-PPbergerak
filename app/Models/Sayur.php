<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori',
        'nama',
        'bibit',
        'deskripsi',
        'penyakit',
        'perawatan',
    ];
}
