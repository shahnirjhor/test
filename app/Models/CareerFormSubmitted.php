<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerFormSubmitted extends Model
{
    use HasFactory;

    public function careername()
    {
        return $this->belongsTo(Career::class, 'id', 'id');
    }
}
