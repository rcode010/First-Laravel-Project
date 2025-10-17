<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view(view: "home");

});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index',data: ['jobs'=>$jobs]);
});

// Create
Route::get("/jobs/create",function(){
    return view('jobs.create');
});

// Store
Route::post('/jobs', function () {

    request()->validate([
        'title'=>['required','min:3'],
        'salary'=> ['required']
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1
    ]);
    return redirect('/jobs');
});

// Show 
Route::get('/jobs/{id}', function ($id) {

    return view("jobs.show", ['job' => Job::find($id)]);
});


// Edit
Route::get('/jobs/{id}/edit', function ($id) {

    return view("jobs.edit", ['job' => Job::find($id)]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    // Validate
    request()->validate([
        'title'=> ['required','min:3'],
        'salary'=>['required']
    ]);

    // authorize (On hold...)
    
    // Update
    $job = Job::findOrFail($id);


    // $job->title = request('title');
    // $job->salary = request('salary');

    // $job->save();

    $job->update([
        'title' =>request('title'),
        'salary'=>request('salary')
    ]);

    // and persist

    // redirect to the job page
    return redirect('/jobs/' . $job->id);

});

// Destroy
Route::delete('/jobs/{id}', function ($id) {

    // authorize (On hold...)

    Job::findOrFail($id)->delete();


    
    return redirect('/jobs');
});


Route::get('/about', function () {
    return view(view: "about");
});
Route::get("/contact", function(){
    return view("contact");
});
