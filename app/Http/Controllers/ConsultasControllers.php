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

        $computer = new Computers();
        $computer= Computers::find(1);
        return $computer->apprentice;

        // $aprendis = new Apprentices();
        // $apprendis = Apprentices::find(2);
        // return $apprendis->computer;

        // $aprendis = new Apprentices();
        // $apprendis = Apprentices::find(2);
        // return $apprendis->courses;
        // $apprendis = new 
    }

}
