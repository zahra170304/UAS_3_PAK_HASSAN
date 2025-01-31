<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriFactory> */
    use HasFactory;

    public function daftar_pekerjaan(){
        return $this->belongsToMany(Pekerjaan::class, 'pekerjaan_kategori');
    }
}