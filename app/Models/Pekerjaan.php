<?php
namespace App\Models;

use App\Models\Perusahaan;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model 
{
    use HasFactory;
  protected $table = 'pekerjaan';
  protected $fillable = [
        'email',
        'job_title',
        'location',
        'region',
        'job_type',
        'description',
    'perusahaan_id'];

  public function Perusahaan(){
    return $this->belongsTo(Perusahaan::class);
  }
  public function daftar_kategori(){
    return $this->belongsToMany(Kategori::class,'pekerjaan_kategori');
  }
  
}
