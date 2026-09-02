@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
<h1>Services</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header">
        <h3 class="card-title">All Services</h3>
        <div class="card-tools">
            
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td>{{ $service->Serviceid }}</td>
                            <td>
                                @if($service->serviceimage)
                                    <img src="{{ asset('uploads/services/' . $service->serviceimage) }}"
                                        alt="{{ $service->ServicesTitle }}"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>{{ $service->ServicesTitle }}</td>
                            <td>{{ $service->pagecategory }}</td>
                            <td>
                                @if($service->status == 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $service->created_at ? $service->created_at->format('Y-m-d') : 'N/A' }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('care.services.edit', $service) }}" class="btn btn-sm btn-info"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('care.services.destroy', $service) }}" method="POST"
                                        style="display: inline-block;"
                                        onsubmit="return confirm('Are you sure you want to delete this service?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No services found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($services->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text-muted">
                    Showing {{ $services->firstItem() }} to {{ $services->lastItem() }} of {{ $services->total() }} services
                </div>
                <div>
                    {{ $services->links() }}
                </div>
            </div>
        @endif
    </div>
</div>
@stop

@section('css')
<style>
    /* Pagination styling for AdminLTE */
    .pagination {
        margin: 0;
    }
    
    .pagination .page-link {
        color: #007bff;
        border: 1px solid #dee2e6;
        padding: 0.375rem 0.75rem;
        margin: 0 2px;
        border-radius: 0.25rem;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    
    .pagination .page-item.disabled .page-link {
        color: #6c757d;
        background-color: #fff;
        border-color: #dee2e6;
    }
    
    .pagination .page-link:hover {
        background-color: #e9ecef;
        border-color: #dee2e6;
        color: #0056b3;
    }
    
    .pagination .page-item.active .page-link:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        color: white;
    }
</style>
@stop

@section('js')
<script>
    // Auto-dismiss alerts after 5 seconds
    setTimeout(function () {
        $('.alert').fadeOut('slow');
    }, 5000);
</script>
@stop