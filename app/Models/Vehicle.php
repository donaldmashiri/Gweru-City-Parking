<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'make',
        'model',
        'year',
        'plate_number',
        'image',
    ];

    public function clamps()
    {
        return $this->hasMany(Clamp::class, 'plate_number', 'plate_number');
    }
}
