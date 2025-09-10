<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view(view: "home");
    
});

Route::get('/jobs', function () {
    return view('jobs',data: ['jobs'=>Job::all()]);
});
Route::get('/jobs/{id}', function ($id) {
    
    return view("job", ['job' => Job::find($id)]);
});

Route::get('/about', function () {
    return view(view: "about");
});
Route::get("/contact", function(){
    return view("contact");
});