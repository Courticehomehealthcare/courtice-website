<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Mail\JobApplicationThankYou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with('jobPosting')->latest()->get();
        return view('admin.job_applications.index', compact('applications'));
    }

    public function show($id)
    {
        $application = JobApplication::with('jobPosting')->findOrFail($id);
        return view('admin.job_applications.show', compact('application'));
    }

    public function sendThankYou(Request $request, $id)
    {
        $application = JobApplication::findOrFail($id);

        try {
            Mail::to($application->candidateemail)->send(new JobApplicationThankYou($application));
            
            $application->update(['email_sent' => true]);

            return back()->with('success', 'Thank you email sent successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);
        $application->delete();
        return redirect()->route('admin.job-applications.index')->with('success', 'Application deleted successfully.');
    }
}
