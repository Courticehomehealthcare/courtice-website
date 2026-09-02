@extends('adminlte::page')

@section('title', 'SEO Pages')

@section('content_header')
<h1><i class="fas fa-search mr-2"></i> SEO Page Settings</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-gradient-primary">
        <h5 class="mb-0 text-white"><i class="fas fa-list mr-1"></i> All Pages — SEO Meta Tags</h5>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-hover mb-0">
            <thead class="thead-dark">
                <tr>
                    <th width="40">#</th>
                    <th>Page</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>Keywords</th>
                    <th width="90">OG Image</th>
                    <th width="90">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($seoPages as $page)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <strong>{{ $page->page_label }}</strong><br>
                            <small class="text-muted">{{ $page->page_key }}</small>
                        </td>
                        <td>{{ $page->meta_title ? \Illuminate\Support\Str::limit($page->meta_title, 50) : '—' }}</td>
                        <td>{{ $page->meta_description ? \Illuminate\Support\Str::limit($page->meta_description, 70) : '—' }}
                        </td>
                        <td>{{ $page->meta_keywords ? \Illuminate\Support\Str::limit($page->meta_keywords, 40) : '—' }}</td>
                        <td class="text-center">
                            @if ($page->og_image)
                                <img src="{{ asset($page->og_image) }}" alt="OG"
                                    style="height:36px;width:auto;border-radius:4px;">
                            @else
                                <span class="badge badge-secondary">None</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('care.seo.edit', $page->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            No SEO records found. Run <code>php artisan db:seed --class=SeoPageSeeder</code>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@stop