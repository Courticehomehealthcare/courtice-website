@extends('adminlte::page')

@section('title', 'Sitemap URLs')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Sitemap URLs</h1>
        <div>
            <a href="{{ route('admin.sitemap-urls.sync') }}" class="btn btn-success">
                <i class="fas fa-sync"></i> Sync from Database
            </a>
            
        </div>
    </div>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Sitemap URLs</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('admin.sitemap-urls.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add Custom URL
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-hover" id="sitemap-table">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>URL</th>
                    <th>Source</th>
                    <th>Priority</th>
                    <th>Freq</th>
                    <th>Last Mod</th>
                    <th>Active</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($urls as $url)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ url($url->url) }}" target="_blank">{{ $url->url }}</a></td>
                        <td><span class="badge badge-info">{{ strtoupper($url->source) }}</span></td>
                        <td>{{ $url->priority }}</td>
                        <td>{{ $url->changefreq }}</td>
                        <td>{{ $url->lastmod }}</td>
                        <td>
                            <span class="badge {{ $url->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $url->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.sitemap-urls.edit', $url) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.sitemap-urls.destroy', $url) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Remove this URL from sitemap?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $urls->links('pagination::bootstrap-4') }}
        </div>

        

    </div>
</div>

@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#sitemap-table').DataTable();
    });
</script>
@stop
