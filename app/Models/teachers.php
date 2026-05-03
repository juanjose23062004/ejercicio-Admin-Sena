<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'area_id',
        'traing_center_id'
    ];

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
