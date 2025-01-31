<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Andhikaaa extends Model
{
    use HasFactory;

    public static function getIdentitasAndhika(){
        return env('IDENTITAS_MAHASISWA','default_identitas');
    }
}
