@extends('adminlte::page')

@section('title', 'Team Members')

@section('content_header')
    <h1>Team Members</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.team.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add Team Member
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Name</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Status</th>
                    <th width="170">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($team as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->qualification }}</td>
                        <td>{{ $member->experience }}</td>

                        <td>
                            <span class="badge {{ $member->status ? 'badge-success' : 'badge-danger' }}">
                                {{ $member->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            <a href="{{ route('admin.team.edit', $member) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.team.destroy', $member) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this member?')"
                                        class="btn btn-sm btn-danger">
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
