<?php

namespace App\Http\Controllers;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function consultasElokuent(){
    
        $module =Module::find(1);
     
        return  $module->students;

    }
}
