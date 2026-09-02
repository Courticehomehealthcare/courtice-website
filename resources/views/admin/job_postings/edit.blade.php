@extends('adminlte::page')

@section('title', 'Edit Job Posting')

@section('content_header')
<h1>Edit Job Posting</h1>
@stop

@section('content')

<form action="{{ route('care.job-postings.update', $jobPosting) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label>Job Title *</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $jobPosting->title) }}" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" value="{{ old('location', $jobPosting->location) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Job Type</label>
                        <select name="job_type" class="form-control">
                            <option value="Full-time" {{ $jobPosting->job_type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ $jobPosting->job_type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Contract" {{ $jobPosting->job_type == 'Contract' ? 'selected' : '' }}>Contract</option>
                            <option value="Freelance" {{ $jobPosting->job_type == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Salary Range</label>
                        <input type="text" name="salary_range" class="form-control" value="{{ old('salary_range', $jobPosting->salary_range) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status *</label>
                        <select name="status" class="form-control" required>
                            <option value="open" {{ $jobPosting->status == 'open' ? 'selected' : '' }}>Open</option>
                            <option value="closed" {{ $jobPosting->status == 'closed' ? 'selected' : '' }}>Closed</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Description *</label>
                <textarea name="description" class="form-control" rows="10" required>{{ old('description', $jobPosting->description) }}</textarea>
            </div>

            <button class="btn btn-success"><i class="fas fa-save"></i> Update</button>
            <a href="{{ route('care.job-postings.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

</form>

@stop
