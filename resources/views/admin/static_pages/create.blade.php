@extends('adminlte::page')

@section('title', 'Add Static Page')

@section('content_header')
    <h1>Add New Static Page</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('care.static-pages.store') }}" method="POST">
            @csrf

            <div class="row">
                {{-- Page Title --}}
                <div class="col-md-6 form-group">
                    <label>Page Title *</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Slug --}}
                <div class="col-md-6 form-group">
                    <label>Slug (URL) *</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug') }}" required>
                    <small class="text-muted">Example: terms-conditions, privacy-policy</small>
                    @error('slug') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Content --}}
                <div class="col-md-12 form-group">
                    <label>Page Content</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content') }}</textarea>
                    @error('content') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Create Page
            </button>

            <a href="{{ route('care.static-pages.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>

        </form>

    </div>
</div>

@stop

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');

    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        let title = this.value;
        let slug = title.toLowerCase()
            .replace(/[^\w ]+/g, '')
            .replace(/ +/g, '-');
        document.getElementById('slug').value = slug;
    });
</script>
@stop
