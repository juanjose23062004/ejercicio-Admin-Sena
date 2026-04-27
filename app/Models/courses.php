<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    public function training_center(){
        return $this->hasMany(training_centers::class);
    }
    public function area(){
        return $this->hasMany(areas::class);
    }
    public function apprentices(){
        return $this->belongsToMany(apprentices::class);
    }
    public function teachers(){
        return $this->belongsToMany(teachers::class);
    }
}
