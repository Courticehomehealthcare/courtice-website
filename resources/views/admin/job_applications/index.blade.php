@extends('adminlte::page')

@section('title', 'Job Applications')

@section('content_header')
    <h1>Job Applications</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
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
                            <a href="{{ route('admin.job-applications.show', $app->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>

                            <form action="{{ route('admin.job-applications.thank-you', $app->id) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf
                                <button class="btn btn-success btn-sm" onclick="return confirm('Send thank you email to this candidate?')">
                                    <i class="fas fa-envelope"></i> Send Thank You
                                </button>
                            </form>

                            <form action="{{ route('admin.job-applications.destroy', $app->id) }}"
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

    </div>
</div>

@stop
