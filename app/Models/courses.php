<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public function training_center(){
        return $this->belongsTo(Training_Centers::class);
    }
    public function areas(){
        return $this->belongsToMany(Areas::class);
    }
    public function apprentices(){
        return $this->hasMany(Apprentices::class );
    }
    public function teachers(){
        return $this->belongsToMany(Teachers::class);
    }
}
