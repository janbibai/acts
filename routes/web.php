<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;


Route::get('/', [StudentsController::class, 'myWelcomeView']);
// Route::get('/', function () {
//     return view('welcome');
;
