<?php

namespace App\Http\Controllers;

use App\Models\Apprentices;
use Illuminate\Http\Request;
use App\Models\Computers;
use App\Models\Courses;
use App\Models\Areas;
use App\Models\Training_Centers;
// use App\Models\Apprentices;

class ConsultasControllers extends Controller
{
    //
    function consultas(){

        // $computer = new Computers();
        // $computer= Computers::find(1);
        // return $computer->apprentice;

        // $aprendis = new Apprentices();
        // $apprendis = Apprentices::find(2);
        // return $apprendis->computer;

        // $aprendis = new Apprentices();
        // $apprendis = Apprentices::find(2);
        // return $apprendis->courses;
        
        $curso = new Courses();
        $curso = Courses::find(1);
        // return $curso->areas;
        // return $curso->training_center;
        return $curso->apprentice;


    }

}
