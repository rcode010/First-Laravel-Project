<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', data: ['jobs' => $jobs]);
    }
    public function create(){
        return view('jobs.create');

    }
    public function show(Job $job) {
        return view("jobs.show", data: ['job' => $job]);

    }
    public function store() {
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
    }
    public function edit(Job $job) {
        return view("jobs.edit", ['job' => $job]);

    }
    public function update(Job $job) {
        // Validate
        request()->validate([
            'title'=> ['required','min:3'],
            'salary'=>['required']
        ]);

        // authorize (On hold...)
        
        // Update


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
    }
    public function destroy(Job $job) {
         // authorize (On hold...)

        $job->delete();


        
        return redirect('/jobs');
    }
}
