@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Category
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Products</th>
                    <th>Status</th>
                    <th width="180px">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($category->image)
                                <img src="{{ asset('uploads/categories/' . $category->image) }}" width="50">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $category->categoriename }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->products_count > 0)
                                <span class="badge badge-info">{{ $category->products_count }} Products</span>
                            @else
                                <span class="badge badge-warning">No products</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge {{ $category->status ? 'badge-success' : 'badge-danger' }}">
                                {{ $category->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Delete this category?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No categories found in the database.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <div class="mt-3">
            {{ $categories->links() }}
        </div>
    </div>
</div>

@stop
