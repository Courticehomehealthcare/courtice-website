@extends('adminlte::page')

@section('title', 'Static Pages')

@section('content_header')
    <h1>Static Pages List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.static-pages.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Page
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            <span class="badge {{ $page->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $page->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $page->updated_at }}</td>

                        <td>
                            <a href="{{ route('admin.static-pages.edit', $page) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.static-pages.destroy', $page) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this page?')"
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
