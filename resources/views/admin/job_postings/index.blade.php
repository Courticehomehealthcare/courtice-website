@extends('adminlte::page')

@section('title', 'Job Postings')

@section('content_header')
    <h1>Job Postings</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.job-postings.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Job
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
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
                            <a href="{{ route('admin.job-postings.edit', $job) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.job-postings.destroy', $job) }}"
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

    </div>
</div>

@stop
