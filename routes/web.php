<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;



Route::get('/Consultas',[StudentController::class,'consultasElokuent'] );
