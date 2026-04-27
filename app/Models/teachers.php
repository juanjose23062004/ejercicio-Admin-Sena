<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    

    public function areas(){
        return $this->belongsToMany(areas::class);
        // return $this->belongsTo('App\Models\areas);
        }
    public function training_centers(){
            
        return $this->belongsToMany(Training_Centers::class);
    }
    public function cource(){
        return $this->hasMany(Courses::class);
    }
    

}
