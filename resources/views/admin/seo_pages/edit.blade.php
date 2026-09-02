@extends('adminlte::page')

@section('title', 'Edit SEO — ' . $seoPage->page_label)

@section('content_header')
<h1><i class="fas fa-search mr-2"></i> Edit SEO: <small class="text-muted">{{ $seoPage->page_label }}</small></h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

<form action="{{ route('care.seo.update', $seoPage->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        {{-- LEFT: Basic Meta --}}
        <div class="col-lg-7">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title mb-0"><i class="fas fa-code mr-1"></i> Basic Meta Tags</h4>
                </div>
                <div class="card-body">

                    {{-- Page info (read-only) --}}
                    <div class="form-group">
                        <label class="text-muted">Page</label>
                        <input type="text" class="form-control bg-light"
                            value="{{ $seoPage->page_label }} ({{ $seoPage->page_key }})" readonly>
                    </div>

                    <div class="form-group">
                        <label for="meta_title"><i class="fas fa-heading mr-1 text-primary"></i> Meta Title <small
                                class="text-muted">(50–60 chars ideal)</small></label>
                        <input type="text" id="meta_title" name="meta_title"
                            class="form-control @error('meta_title') is-invalid @enderror"
                            value="{{ old('meta_title', $seoPage->meta_title) }}" maxlength="255"
                            placeholder="Page title shown in browser tab & search results">
                        <small id="titleCount" class="form-text text-muted">0 / 255 chars</small>
                        @error('meta_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_description"><i class="fas fa-align-left mr-1 text-primary"></i> Meta
                            Description <small class="text-muted">(150–160 chars ideal)</small></label>
                        <textarea id="meta_description" name="meta_description"
                            class="form-control @error('meta_description') is-invalid @enderror" rows="3"
                            maxlength="500"
                            placeholder="Brief description shown in Google search snippets">{{ old('meta_description', $seoPage->meta_description) }}</textarea>
                        <small id="descCount" class="form-text text-muted">0 / 500 chars</small>
                        @error('meta_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords"><i class="fas fa-tags mr-1 text-primary"></i> Meta Keywords <small
                                class="text-muted">(comma-separated)</small></label>
                        <input type="text" id="meta_keywords" name="meta_keywords"
                            class="form-control @error('meta_keywords') is-invalid @enderror"
                            value="{{ old('meta_keywords', $seoPage->meta_keywords) }}" maxlength="255"
                            placeholder="keyword1, keyword2, keyword3">
                        @error('meta_keywords') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="canonical_url"><i class="fas fa-link mr-1 text-primary"></i> Canonical URL <small
                                class="text-muted">(optional)</small></label>
                        <input type="url" id="canonical_url" name="canonical_url"
                            class="form-control @error('canonical_url') is-invalid @enderror"
                            value="{{ old('canonical_url', $seoPage->canonical_url) }}"
                            placeholder="https://yourdomain.com/page">
                        @error('canonical_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                </div>
            </div>
        </div>

        {{-- RIGHT: Open Graph --}}
        <div class="col-lg-5">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h4 class="card-title mb-0"><i class="fab fa-facebook mr-1"></i> Open Graph (Social Share)</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="og_title"><i class="fas fa-heading mr-1 text-success"></i> OG Title</label>
                        <input type="text" id="og_title" name="og_title"
                            class="form-control @error('og_title') is-invalid @enderror"
                            value="{{ old('og_title', $seoPage->og_title) }}" maxlength="255"
                            placeholder="Leave blank to use Meta Title">
                        @error('og_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="og_description"><i class="fas fa-align-left mr-1 text-success"></i> OG
                            Description</label>
                        <textarea id="og_description" name="og_description"
                            class="form-control @error('og_description') is-invalid @enderror" rows="3" maxlength="500"
                            placeholder="Leave blank to use Meta Description">{{ old('og_description', $seoPage->og_description) }}</textarea>
                        @error('og_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="og_image"><i class="fas fa-image mr-1 text-success"></i> OG Image <small
                                class="text-muted">(1200×630 px recommended)</small></label>
                        @if ($seoPage->og_image)
                            <div class="mb-2">
                                <img src="{{ asset($seoPage->og_image) }}" alt="Current OG Image"
                                    style="max-width:100%;max-height:120px;border-radius:6px;border:1px solid #dee2e6;">
                                <small class="d-block text-muted mt-1">Current image. Upload a new one to replace.</small>
                            </div>
                        @endif
                        <input type="file" id="og_image" name="og_image"
                            class="form-control-file @error('og_image') is-invalid @enderror" accept="image/*">
                        @error('og_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                </div>
            </div>

            {{-- Preview Card --}}
            <div class="card card-light card-outline">
                <div class="card-header">
                    <h4 class="card-title mb-0"><i class="fas fa-eye mr-1"></i> Google Preview</h4>
                </div>
                <div class="card-body">
                    <div
                        style="border:1px solid #dadce0;border-radius:8px;padding:14px;background:#fff;font-family:Arial,sans-serif;">
                        <div id="preview-title"
                            style="color:#1a0dab;font-size:18px;font-weight:400;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                            {{ $seoPage->meta_title ?? 'Meta Title Preview' }}
                        </div>
                        <div style="color:#006621;font-size:13px;">{{ url('/') }}</div>
                        <div id="preview-desc"
                            style="color:#545454;font-size:13px;line-height:1.5;margin-top:4px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                            {{ $seoPage->meta_description ?? 'Meta description preview will appear here...' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save mr-1"></i> Save SEO Settings
        </button>
        <a href="{{ route('care.seo.index') }}" class="btn btn-secondary ml-2">
            <i class="fas fa-arrow-left mr-1"></i> Back to List
        </a>
    </div>
</form>

@push('js')
    <script>
        // Live character counters
        function updateCount(inputId, countId) {
            var el = document.getElementById(inputId);
            var ct = document.getElementById(countId);
            if (el && ct) {
                ct.textContent = el.value.length + ' / ' + el.getAttribute('maxlength') + ' chars';
                el.addEventListener('input', function () {
                    ct.textContent = this.value.length + ' / ' + this.getAttribute('maxlength') + ' chars';
                });
            }
        }
        updateCount('meta_title', 'titleCount');
        updateCount('meta_description', 'descCount');

        // Live Google preview
        var titleInput = document.getElementById('meta_title');
        var descInput = document.getElementById('meta_description');
        var prevTitle = document.getElementById('preview-title');
        var prevDesc = document.getElementById('preview-desc');

        if (titleInput && prevTitle) {
            titleInput.addEventListener('input', function () {
                prevTitle.textContent = this.value || 'Meta Title Preview';
            });
        }
        if (descInput && prevDesc) {
            descInput.addEventListener('input', function () {
                prevDesc.textContent = this.value || 'Meta description preview will appear here...';
            });
        }
    </script>
@endpush

@stop