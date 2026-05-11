@extends('adminlte::page')

@section('title', 'Sitemap URLs')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Sitemap URLs</h1>
        <div>
            <a href="{{ route('admin.sitemap-urls.sync') }}" class="btn btn-success">
                <i class="fas fa-sync"></i> Sync from Database
            </a>
            <a href="{{ route('admin.sitemap-urls.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Custom URL
            </a>
        </div>
    </div>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped" id="sitemap-table">
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
