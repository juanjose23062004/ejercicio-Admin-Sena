<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    use HasFactory;
        use HasFactory;
    public function computers(){
        return $this->belongsToMany(computers::class);
    }
    public function course_techer(){
         return $this->hasMany(course_teacher::class);
    }
}
