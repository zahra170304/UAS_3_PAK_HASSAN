<?php

namespace App\Models;

use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    /** @use HasFactory<\Database\Factories\PerusahaanFactory> */
    use HasFactory;

    public function pekerjaan(){
     return $this->hasMany(Pekerjaan::class);
    }
    
}
