<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Centers extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->belongsToMany(Teachers::class);
    }
    public function course(){
        return $this->hasMany(Courses::class);
    }
}
