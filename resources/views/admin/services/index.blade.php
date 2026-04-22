@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Service
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
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
    </div>
</div>

@stop
