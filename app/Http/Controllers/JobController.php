<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::with('employer')->latest()->simplePaginate(4);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show( Job $job ) {
        return view('jobs.show', ['job' => $job]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store( Job $job ) {
        // Validate the request
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
            'description' => ['required', 'min:3']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function edit( Job $job ) {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update( Job $job ) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
            'description' => ['required', 'min:3']
        ]);
    
        //$job = Job::findOrFail($id);
    
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description')
        ]);
    
        return redirect('/jobs/' . $job->id);
    }

    public function destroy( Job $job ) {
        $job->delete();

        return redirect('/jobs');
    }
}
