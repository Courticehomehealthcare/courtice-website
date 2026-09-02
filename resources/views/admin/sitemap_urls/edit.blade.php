@extends('adminlte::page')

@section('title', 'Edit Sitemap URL')

@section('content_header')
    <h1>Edit Sitemap URL</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('care.sitemap-urls.update', $sitemapUrl) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="url">URL Path</label>
                        <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $sitemapUrl->url) }}" required>
                        @error('url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="priority">Priority (0.0 to 1.0)</label>
                        <input type="number" step="0.1" name="priority" id="priority" class="form-control" value="{{ old('priority', $sitemapUrl->priority) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="changefreq">Change Frequency</label>
                        <select name="changefreq" id="changefreq" class="form-control">
                            @foreach(['always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'] as $freq)
                                <option value="{{ $freq }}" {{ $sitemapUrl->changefreq == $freq ? 'selected' : '' }}>{{ ucfirst($freq) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="is_active">Status</label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1" {{ $sitemapUrl->is_active ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$sitemapUrl->is_active ? 'selected' : '' }}>Inactive (Hidden from Sitemap)</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update URL</button>
                    <a href="{{ route('care.sitemap-urls.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
