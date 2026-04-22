@extends('adminlte::page')

@section('title', 'Add Blog')

@section('content_header')
    <h1>Add New Blog</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                {{-- Blog Title --}}
                <div class="col-md-6 form-group">
                    <label>Blog Title *</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name') }}" required>
                </div>

                {{-- Slug --}}
                <div class="col-md-6 form-group">
                    <label>Blog URL (slug)</label>
                    <input type="text" name="blogurl" class="form-control"
                           value="{{ old('blogurl') }}">
                </div>

                {{-- Category --}}
                <div class="col-md-6 form-group">
                    <label>Category *</label>
                    <input type="text" name="category" class="form-control"
                           value="{{ old('category') }}" required>
                </div>

                {{-- Written By --}}
                <div class="col-md-6 form-group">
                    <label>Written By</label>
                    <input type="text" name="writtenby" class="form-control"
                           value="{{ old('writtenby') }}">
                </div>

                {{-- Short Description --}}
                <div class="col-md-12 form-group">
                    <label>Short Description</label>
                    <textarea name="shortdescription" class="form-control" rows="3">{{ old('shortdescription') }}</textarea>
                </div>

                {{-- Description --}}
                <div class="col-md-12 form-group">
                    <label>Blog Content *</label>
                    <textarea id="description" name="description" class="form-control" rows="6" required>{{ old('description') }}</textarea>
                </div>

                {{-- Images --}}
                <div class="col-md-6 form-group">
                    <label>Image 1</label>
                    <input type="file" name="image1" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <label>Image 2</label>
                    <input type="file" name="image2" class="form-control">
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                {{-- Visible --}}
                <div class="col-md-6 form-group">
                    <label>Visible in Website?</label>
                    <select name="visible" class="form-control">
                        <option value="1">Visible</option>
                        <option value="0">Hidden</option>
                    </select>
                </div>
            </div>

            {{-- ================= SEO SECTION ================= --}}
            <hr>
            <h4>SEO & Meta Information</h4>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>SEO Title</label>
                    <input type="text" name="seo_title" class="form-control"
                           value="{{ old('seo_title') }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control"
                           value="{{ old('canonical_url') }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>SEO Description</label>
                    <textarea name="seo_description" class="form-control" rows="3">{{ old('seo_description') }}</textarea>
                </div>

                <div class="col-md-12 form-group">
                    <label>SEO Keywords</label>
                    <textarea name="seo_keywords" class="form-control" rows="2"
                        placeholder="keyword1, keyword2, keyword3">{{ old('seo_keywords') }}</textarea>
                </div>

                {{-- Open Graph --}}
                <div class="col-md-6 form-group">
                    <label>OG Title</label>
                    <input type="text" name="og_title" class="form-control"
                           value="{{ old('og_title') }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>OG Image URL</label>
                    <input type="text" name="og_image" class="form-control"
                           value="{{ old('og_image') }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>OG Description</label>
                    <textarea name="og_description" class="form-control" rows="3">{{ old('og_description') }}</textarea>
                </div>

                {{-- Twitter --}}
                <div class="col-md-6 form-group">
                    <label>Twitter Title</label>
                    <input type="text" name="twitter_title" class="form-control"
                           value="{{ old('twitter_title') }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>Twitter Image URL</label>
                    <input type="text" name="twitter_image" class="form-control"
                           value="{{ old('twitter_image') }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>Twitter Description</label>
                    <textarea name="twitter_description" class="form-control" rows="3">{{ old('twitter_description') }}</textarea>
                </div>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Create Blog
            </button>

            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>

        </form>

    </div>
</div>

@stop

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@stop
