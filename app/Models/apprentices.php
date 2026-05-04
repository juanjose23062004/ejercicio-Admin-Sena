<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    use HasFactory;
        // uno a muchos
    public function computer(){
        return $this->belongsTo(Computers::class, 'computer_id');
    }

    public function courses(){
        return $this->belongsToMany(Courses::class,'course_id');
    }
}
