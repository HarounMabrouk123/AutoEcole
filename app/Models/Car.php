<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','distance',"marque","image"];
    
    public function trainers()
    {
        return $this->hasMany(Trainer::class);
    }

}
