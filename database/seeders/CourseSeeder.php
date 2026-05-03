<?php

namespace Database\Seeders;

use App\Models\Areas;
use App\Models\Computers;
use App\Models\Courses;
use App\Models\Training_Centers;
use App\Models\TrainingCenters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear Datos Por defectos
        Areas::create([
            'name' => 'Matematicas'
        ]);
        Areas::create([
            'name' => 'Naturales'
        ]);
        Areas::create([
            'name' => 'Sociales'
        ]);
        Areas::create([
            'name' => 'Quimica'
        ]);

        TrainingCenters::create([
            'name' => 'Comuneros',
            'location' => '1234df'
        ]);
        TrainingCenters::create([
            'name' => 'Fransisco',
            'location' => '1234yz'
        ]);

        Computers::create([
            'number' => 'ASUS',
            'brand' => '8 Ghz'
        ]);
        Computers::create([
            'number' => 'HP',
            'brand' => '8 Ghz'
        ]);
        Computers::create([
            'number' => 'HP',
            'brand' => '16 Ghz'
        ]);
        Computers::create([
            'number' => 'HP',
            'brand' => '4 Ghz'
        ]);

        Courses::create([
            'course_number' => 'Tenologo',
            'day'=>'Lunes',
            'area_id'=>'1',
            'traing_center_id'=>'1'
        ]);
        Courses::create([
            'course_number' => 'Tecnico',
            'day'=>'Martes',
            'area_id'=>'1',
            'traing_center_id'=>'2'
        ]);
        Courses::create([
            'course_number' => 'Tecnico',
            'day'=>'Martes',
            'area_id'=>'4',
            'traing_center_id'=>'1'
        ]);
        Courses::create([
            'course_number' => 'ADSO',
            'day'=>'Martes',
            'area_id'=>'3',
            'traing_center_id'=>'3'
        ]);
        //
    }
}
// pasarlo a la dataBase...
//php artisan db:seed --class=CourseSeeder
