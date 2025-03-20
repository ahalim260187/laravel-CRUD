<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->latest()->simplePaginate(5);
        //        dd($jobs);
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
        $job = JobListing::create([
            'name' => $request->job_name,
            'salary' => $request->salary,
            'employe_id' => 2
        ]);

        Mail::to($job->employer->user)->send(new JobPosted($job));
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
