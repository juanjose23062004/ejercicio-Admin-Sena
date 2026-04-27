<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    

    public function area(){
        return $this->belongsTo(areas::class);
        // return $this->belongsTo('App\Models\areas);
        }
    public function training_centers(){
            
        return $this->belongsTo(training_centers::class);
    }
    public function cources(){
        return $this->belongsToMany(courses::class);
    }
    

}
