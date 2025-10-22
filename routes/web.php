<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');
// Route::get('/jobs', action: [JobController::class, 'index']);
// Route::get("/jobs/create",[JobController::class, 'create']);
// Route::post('/jobs', [JobController::class, 'store']);

// // {job:id} defining job as an id
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// // Route::resource('jobs',JobController::class.[
// // only and except =>[]
// // ]);

// Route::view('/about', 'about');
// Route::view("/contact", 'contact');

// Route::controller(JobController::class)->group(function (){

//     Route::view('/', 'home');
//     Route::get('/jobs', action: 'index');
//     Route::get("/jobs/create",'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
//     Route::view('/about', 'about');
//     Route::view("/contact", 'contact');

// });



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view("/contact", 'contact');

Route::resource('jobs',JobController::class,[
    'except'=>[]
]);


Route::get('/register',action: [RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);
