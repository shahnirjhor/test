<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudies extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'description','created_by','updated_by'];
}
