@extends('adminlte::page')

@section('title', 'Edit Static Page')

@section('content_header')
    <h1>Edit Static Page</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.static-pages.update', $staticPage) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Page Title --}}
                <div class="col-md-6 form-group">
                    <label>Page Title *</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $staticPage->title) }}" required>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Slug --}}
                <div class="col-md-6 form-group">
                    <label>Slug (URL) *</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $staticPage->slug) }}" required>
                    <small class="text-muted">Example: terms-conditions, privacy-policy</small>
                    @error('slug') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Content --}}
                <div class="col-md-12 form-group">
                    <label>Page Content</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $staticPage->content) }}</textarea>
                    @error('content') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1" {{ old('is_active', $staticPage->is_active) == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $staticPage->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Update Page
            </button>

            <a href="{{ route('admin.static-pages.index') }}" class="btn btn-secondary">
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
</script>
@stop
