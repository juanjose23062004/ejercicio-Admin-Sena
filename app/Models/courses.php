<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public function training_center(){
        return $this->belongsTo(TrainingCenters::class,'traing_center_id');
    }
    public function areas(){
        return $this->belongsTo(Areas::class,'area_id');
    }
    public function apprentice(){
        return $this->hasMany(Apprentices::class,'id');
    }
    public function teachers(){
        return $this->belongsToMany(Teachers::class);
    }
}
