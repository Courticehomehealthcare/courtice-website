@extends('adminlte::page')

@section('title', 'Add Sitemap URL')

@section('content_header')
    <h1>Add Custom Sitemap URL</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.sitemap-urls.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="url">URL Path (e.g., /my-page)</label>
                        <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" required>
                        @error('url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="priority">Priority (0.0 to 1.0)</label>
                        <input type="number" step="0.1" name="priority" id="priority" class="form-control" value="{{ old('priority', 0.5) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="changefreq">Change Frequency</label>
                        <select name="changefreq" id="changefreq" class="form-control">
                            <option value="always">Always</option>
                            <option value="hourly">Hourly</option>
                            <option value="daily">Daily</option>
                            <option value="weekly" selected>Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="never">Never</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save URL</button>
                    <a href="{{ route('admin.sitemap-urls.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
