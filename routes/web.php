<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::post('/', [ TestController::class, 'upload' ]);


//Route::get('/students', [StudentController::class, 'index']);
//Route::get('/students/create', [StudentController::class, 'create']);
//Route::post('/students', [StudentController::class, 'store']);
//Route::get('/students/{student}', [StudentController::class, 'show']);
//Route::get('/students/{student}/edit', [StudentController::class, 'edit']);
//Route::patch('/students/{student}', [StudentController::class, 'update']);
//Route::delete('/students/{student}', [StudentController::class, 'destroy']);

Route::resource('students', StudentController::class);
