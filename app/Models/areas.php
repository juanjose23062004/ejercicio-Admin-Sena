<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;
    public function teaches(){
        return $this->belongsToMany(teachers::class);
    }
    public function courses_teachers(){
        return $this->belongsToMany(course_teacher::class);
    }
}
