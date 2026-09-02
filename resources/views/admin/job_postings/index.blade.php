@extends('adminlte::page')

@section('title', 'Job Postings')

@section('content_header')
    <h1>Job Postings</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Job Postings</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('care.job-postings.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add New Job
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Applications</th>
                    <th width="200px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->job_type }}</td>
                        <td>
                            @if ($job->status == 'open')
                                <span class="badge badge-success">Open</span>
                            @else
                                <span class="badge badge-danger">Closed</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge badge-info">{{ $job->applications()->count() }}</span>
                        </td>
                        <td>
                            <a href="{{ route('care.job-postings.edit', $job) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('care.job-postings.destroy', $job) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this job posting?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $jobs->links('pagination::bootstrap-4') }}
        </div>

        


    </div>
</div>

@stop
