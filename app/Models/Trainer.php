<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'age', 'address', 'phone', 'description', 'car_id', 'image',
    ];
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function candidats()
    {
        return $this->hasMany(User::class);
    }

}
