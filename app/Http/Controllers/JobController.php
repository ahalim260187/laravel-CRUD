<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('user')->latest()->simplePaginate(5);
        return view('jobs', compact('jobs'));
    }
    public function create()
    {
        return view('create-job');
    }
    public function store(Request $request)
    {
        $request->validate([
            'job_name' => ['string', 'min:3'],
            'salary' => ['min:5']
        ]);
        JobListing::create([
            'name' => $request->job_name,
            'salary' => $request->salary,
            'user_id' => 2
        ]);
        return redirect('/job')->with('success', 'Job Saved successfully!');
    }
    public function show(JobListing $job)
    {
        return view('job', ['job' => $job]);
    }
    public function edit(JobListing $job)
    {
        return view('edit-job', compact('job'));
    }
    public function update(Request $request, JobListing $job)
    {
        $request->validate([
            'job_name' => ['string', 'min:3'],
            'salary' => ['min:5']
        ]);
        $job->update([
            'name' => $request->job_name,
            'salary' => $request->salary,
        ]);
        return redirect('/job')->with('success', 'Job updated successfully!');
    }
    public function delete(JobListing $job)
    {
        $job->delete();
        return redirect('/job')->with('success', 'Job Deleted successfully!');
    }
}
