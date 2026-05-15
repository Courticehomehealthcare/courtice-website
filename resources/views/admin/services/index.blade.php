@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Services List</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search services..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add New Service
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                            <th>Sub Category</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th width="180px">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->ServicesTitle }}</td>
                        <td>{{ $service->pagecategory }}</td>
                          <td>
            @if($service->pagesubcategory)
                <span class="badge badge-info">
                    {{ ucfirst($service->pagesubcategory) }}
                </span>
            @else
                <span class="text-muted">—</span>
            @endif
        </td>
                        <td>{{ $service->servicesdate }}</td>

                        <td>
                            <span class="badge {{ $service->status ? 'badge-success' : 'badge-danger' }}">
                                {{ $service->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            {{-- Edit --}}
                            <a href="{{ route('admin.services.edit', $service) }}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('admin.services.destroy', $service) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this service?')"
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
            {{ $services->links('pagination::bootstrap-4') }}
        </div>

        

    </div>
</div>

@stop
