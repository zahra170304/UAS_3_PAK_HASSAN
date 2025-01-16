<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'job_title',
        'location',
        'region',
        'job_type',
        'description',
        'company_name',
        'tagline',
        'company_description',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'featured_image',
        'logo',
    ];
}
