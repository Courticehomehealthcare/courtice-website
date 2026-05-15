<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function index()
    {
        $jobs = JobPosting::latest()->paginate(15);
        return view('admin.job_postings.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.job_postings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'status' => 'required|in:open,closed',
        ]);

        JobPosting::create($request->all());

        return redirect()->route('admin.job-postings.index')->with('success', 'Job posting created successfully.');
    }

    public function edit(JobPosting $jobPosting)
    {
        return view('admin.job_postings.edit', compact('jobPosting'));
    }

    public function update(Request $request, JobPosting $jobPosting)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'status' => 'required|in:open,closed',
        ]);

        $jobPosting->update($request->all());

        return redirect()->route('admin.job-postings.index')->with('success', 'Job posting updated successfully.');
    }

    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();
        return redirect()->route('admin.job-postings.index')->with('success', 'Job posting deleted successfully.');
    }
}
