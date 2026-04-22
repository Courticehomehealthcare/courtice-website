@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
    <h1>Blog List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Blog
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
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
                            <a href="{{ route('admin.blogs.edit', $blog) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.blogs.destroy', $blog) }}"
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

    </div>
</div>

@stop
