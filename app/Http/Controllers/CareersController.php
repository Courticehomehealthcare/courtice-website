<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareersController extends Controller
{
    public function index()
    {
        $jobs = JobPosting::where('status', 'open')->latest()->get();
        return view('careers.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = JobPosting::where('status', 'open')->findOrFail($id);
        return view('careers.show', compact('job'));
    }

    public function apply(Request $request, $id)
    {
        $job = JobPosting::where('status', 'open')->findOrFail($id);

        $request->validate([
            'candidateName' => 'required|string|max:200',
            'candidatelastName' => 'required|string|max:200',
            'candidateemail' => 'required|email|max:255',
            'candidatephoneno' => 'required|string|max:200',
            'Message' => 'nullable|string|max:1000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ]);

        $data = $request->except('resume');
        $data['job_posting_id'] = $job->id;
        $data['appliedforposition'] = $job->title;
        $data['applieddate'] = now()->toDateString();

        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $data['resume'] = $path;
        }

        JobApplication::create($data);

        return back()->with('success', 'Your application has been submitted successfully. We will get back to you soon.');
    }
}
