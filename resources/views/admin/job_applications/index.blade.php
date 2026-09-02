@extends('adminlte::page')

@section('title', 'Job Applications')

@section('content_header')
    <h1>Job Applications</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Job Applications</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Candidate Name</th>
                    <th>Email</th>
                    <th>Position Applied For</th>
                    <th>Date</th>
                    <th>Email Sent</th>
                    <th width="250px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $app)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $app->candidateName }} {{ $app->candidatelastName }}</td>
                        <td>{{ $app->candidateemail }}</td>
                        <td>
                            @if($app->jobPosting)
                                {{ $app->jobPosting->title }}
                            @else
                                {{ $app->appliedforposition }}
                            @endif
                        </td>
                        <td>{{ $app->created_at ? $app->created_at->format('d M Y') : $app->applieddate }}</td>
                        <td>
                            @if ($app->email_sent)
                                <span class="badge badge-success">Yes</span>
                            @else
                                <span class="badge badge-secondary">No</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('care.job-applications.show', $app->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>

                            <form action="{{ route('care.job-applications.thank-you', $app->id) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf
                                <button class="btn btn-success btn-sm" onclick="return confirm('Send thank you email to this candidate?')">
                                    <i class="fas fa-envelope"></i> Send Thank You
                                </button>
                            </form>

                            <form action="{{ route('care.job-applications.destroy', $app->id) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this application?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $applications->links('pagination::bootstrap-4') }}
        </div>

        


    </div>
</div>

@stop
