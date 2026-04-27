<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    use HasFactory;
        use HasFactory;
        // uno a muchos
    public function computer(){
        return $this->belongsTo(Computers::class);
    }

    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
