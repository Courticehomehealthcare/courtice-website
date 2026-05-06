@extends('adminlte::page')

@section('title', 'Application Details')

@section('content_header')
    <h1>Application Details</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Candidate Information</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Full Name</th>
                        <td>{{ $application->candidateName }} {{ $application->candidatelastName }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $application->candidateemail }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $application->candidatephoneno }}</td>
                    </tr>
                    <tr>
                        <th>Applied For</th>
                        <td>
                            @if($application->jobPosting)
                                {{ $application->jobPosting->title }}
                            @else
                                {{ $application->appliedforposition }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Date Applied</th>
                        <td>{{ $application->created_at ? $application->created_at->format('d M Y H:i') : $application->applieddate }}</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ $application->Message }}</td>
                    </tr>
                    <tr>
                        <th>Resume</th>
                        <td>
                            @if($application->resume && $application->resume != 'NULL')
                                <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-file-download"></i> Download Resume
                                </a>
                            @else
                                <span class="text-muted">No resume uploaded</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <form action="{{ route('admin.job-applications.thank-you', $application->id) }}"
                        method="POST" style="display:inline-block;">
                    @csrf
                    <button class="btn btn-success" onclick="return confirm('Send thank you email to this candidate?')">
                        <i class="fas fa-envelope"></i> Send Thank You Email
                    </button>
                </form>
                <a href="{{ route('admin.job-applications.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>

@stop
