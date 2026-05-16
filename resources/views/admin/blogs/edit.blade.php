@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
<h1>Edit Blog</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Blog Title --}}
                <div class="col-md-6 form-group">
                    <label>Blog Title *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $blog->name) }}" required>
                </div>

                {{-- Slug --}}
                <div class="col-md-6 form-group">
                    <label>Blog URL (slug)</label>
                    <input type="text" name="blogurl" class="form-control" value="{{ old('blogurl', $blog->blogurl) }}">
                </div>

                {{-- Category --}}
                <div class="col-md-6 form-group">
                    <label>Category *</label>
                    <input type="text" name="category" class="form-control"
                        value="{{ old('category', $blog->category) }}" required>
                </div>

                {{-- Written By --}}
                <div class="col-md-6 form-group">
                    <label>Written By</label>
                    <input type="text" name="writtenby" class="form-control"
                        value="{{ old('writtenby', $blog->writtenby) }}">
                </div>

                {{-- Tags --}}
                <div class="col-md-6 form-group">
                    <label>Tags (comma separated)</label>
                    <input type="text" name="tags" class="form-control"
                        value="{{ old('tags', $blog->tags) }}" placeholder="tag1, tag2, tag3">
                </div>

                {{-- Short Description --}}
                <div class="col-md-12 form-group">
                    <label>Short Description</label>
                    <textarea id="shortdescription" name="shortdescription" class="form-control"
                        rows="3">{{ old('shortdescription', $blog->shortdescription) }}</textarea>
                </div>

                {{-- Description --}}
                <div class="col-md-12 form-group">
                    <label>Blog Content *</label>
                    <textarea id="description" name="description" class="form-control" rows="6"
                        required>{{ old('description', $blog->description) }}</textarea>
                </div>

                {{-- Image 1 --}}
                <div class="col-md-6 form-group">
                    <label>Image 1</label>
                    <input type="file" name="image1" class="form-control">
                    @if($blog->image1)
                        <img src="{{ str_contains($blog->image1, 'uploads/') ? asset($blog->image1) : asset('storage/' . $blog->image1) }}"
                            class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                {{-- Image 2 --}}
                <div class="col-md-6 form-group">
                    <label>Image 2</label>
                    <input type="file" name="image2" class="form-control">
                    @if($blog->image2)
                        <img src="{{ asset('storage/' . $blog->image2) }}" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>

                {{-- Visible --}}
                <div class="col-md-6 form-group">
                    <label>Visible in Website?</label>
                    <select name="visible" class="form-control">
                        <option value="1" {{ $blog->visible ? 'selected' : '' }}>Visible</option>
                        <option value="0" {{ !$blog->visible ? 'selected' : '' }}>Hidden</option>
                    </select>
                </div>

                {{-- Last Updated / Publish Date --}}
                <div class="col-md-6 form-group">
                    <label>Publish Date (Last Updated) *</label>
                    <input type="datetime-local" name="last_updated" class="form-control"
                        value="{{ old('last_updated', $blog->last_updated ? $blog->last_updated->format('Y-m-d\TH:i') : '') }}" required>
                </div>
            </div>

            {{-- ================= SEO SECTION ================= --}}
            <hr>
            <h4>SEO & Meta Information</h4>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>SEO Title</label>
                    <input type="text" id="seo_title" name="seo_title" class="form-control"
                        value="{{ old('seo_title', $blog->seo_title) }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control"
                        value="{{ old('canonical_url', $blog->canonical_url) }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>SEO Description</label>
                    <textarea id="seo_description" name="seo_description" class="form-control"
                        rows="3">{{ old('seo_description', $blog->seo_description) }}</textarea>
                </div>

                <div class="col-md-12 form-group">
                    <label>SEO Keywords</label>
                    <textarea name="seo_keywords" class="form-control"
                        rows="2">{{ old('seo_keywords', $blog->seo_keywords) }}</textarea>
                </div>

                {{-- Open Graph --}}
                <div class="col-md-6 form-group">
                    <label>OG Title</label>
                    <input type="text" id="og_title" name="og_title" class="form-control"
                        value="{{ old('og_title', $blog->og_title) }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>OG Image URL</label>
                    <input type="text" name="og_image" class="form-control"
                        value="{{ old('og_image', $blog->og_image) }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>OG Description</label>
                    <textarea id="og_description" name="og_description" class="form-control"
                        rows="3">{{ old('og_description', $blog->og_description) }}</textarea>
                </div>

                {{-- Twitter --}}
                <div class="col-md-6 form-group">
                    <label>Twitter Title</label>
                    <input type="text" id="twitter_title" name="twitter_title" class="form-control"
                        value="{{ old('twitter_title', $blog->twitter_title) }}">
                </div>

                <div class="col-md-6 form-group">
                    <label>Twitter Image URL</label>
                    <input type="text" name="twitter_image" class="form-control"
                        value="{{ old('twitter_image', $blog->twitter_image) }}">
                </div>

                <div class="col-md-12 form-group">
                    <label>Twitter Description</label>
                    <textarea id="twitter_description" name="twitter_description" class="form-control"
                        rows="3">{{ old('twitter_description', $blog->twitter_description) }}</textarea>
                </div>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Update Blog
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

    document.addEventListener('DOMContentLoaded', function() {
        // --- Description Sync ---
        const shortDesc = document.getElementById('shortdescription');
        const seoDesc = document.getElementById('seo_description');
        const ogDesc = document.getElementById('og_description');
        const twitterDesc = document.getElementById('twitter_description');

        const descTargets = [seoDesc, ogDesc, twitterDesc];
        const descManualChanges = new Set();

        descTargets.forEach(target => {
            if (target) {
                target.addEventListener('input', function() {
                    descManualChanges.add(target.id);
                });
            }
        });

        if (shortDesc) {
            shortDesc.addEventListener('input', function() {
                const value = this.value;
                descTargets.forEach(target => {
                    if (target && !descManualChanges.has(target.id)) {
                        target.value = value;
                    }
                });
            });
        }

        // --- Title Sync ---
        const seoTitle = document.getElementById('seo_title');
        const ogTitle = document.getElementById('og_title');
        const twitterTitle = document.getElementById('twitter_title');

        const titleTargets = [ogTitle, twitterTitle];
        const titleManualChanges = new Set();

        titleTargets.forEach(target => {
            if (target) {
                target.addEventListener('input', function() {
                    titleManualChanges.add(target.id);
                });
            }
        });

        if (seoTitle) {
            seoTitle.addEventListener('input', function() {
                const value = this.value;
                titleTargets.forEach(target => {
                    if (target && !titleManualChanges.has(target.id)) {
                        target.value = value;
                    }
                });
            });
        }
    });
</script>
@stop