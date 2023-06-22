<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitude',
        'longitude',
        'plate_number',
        'user_id',
        'image',
        'reason',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'plate_number', 'plate_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
