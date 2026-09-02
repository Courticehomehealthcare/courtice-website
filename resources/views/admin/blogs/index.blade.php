@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
    <h1>Blog List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Blog List</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('care.blogs.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add New Blog
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Written By</th>
                    <th>Visible</th>
                    <th>Last Updated</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->name }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->writtenby }}</td>
                        <td>
                            <span class="badge {{ $blog->visible ? 'badge-success' : 'badge-danger' }}">
                                {{ $blog->visible ? 'Visible' : 'Hidden' }}
                            </span>
                        </td>
                        <td>{{ $blog->last_updated }}</td>

                        <td>
                            <a href="{{ route('care.blogs.edit', $blog) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('care.blogs.destroy', $blog) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this blog?')"
                                        class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>

        


    </div>
</div>

@stop
