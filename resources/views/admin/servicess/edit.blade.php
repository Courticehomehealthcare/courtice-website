@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
<h1>Edit Service</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Service Information</h3>
        <div class="card-tools">
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ServicesTitle">Service Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('ServicesTitle') is-invalid @enderror"
                            id="ServicesTitle" name="ServicesTitle"
                            value="{{ old('ServicesTitle', $service->ServicesTitle) }}" required>
                        @error('ServicesTitle')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="servicesUrl">Service URL Slug</label>
                        <input type="text" class="form-control" id="servicesUrl" name="servicesUrl"
                            value="{{ old('servicesUrl', $service->servicesUrl) }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pagecategory">Page Category <span class="text-danger">*</span></label>
                        <select class="form-control @error('pagecategory') is-invalid @enderror" id="pagecategory" name="pagecategory" required>
                            <option value="services" {{ old('pagecategory', $service->pagecategory) == 'services' ? 'selected' : '' }}>Services</option>
                        </select>
                        @error('pagecategory')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pagesubcategory">Page Subcategory</label>
                        <input type="text" class="form-control" id="pagesubcategory" name="pagesubcategory"
                            value="{{ old('pagesubcategory', $service->pagesubcategory) }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="ServicesText">Service Description <span class="text-danger">*</span></label>
                <textarea class="form-control @error('ServicesText') is-invalid @enderror" id="ServicesText"
                    name="ServicesText" rows="10" required>{{ old('ServicesText', $service->ServicesText) }}</textarea>
                @error('ServicesText')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="serviceimage">Service Image</label>
                        @if($service->serviceimage)
                            <div class="mb-2">
                                <img src="{{ asset('uploads/services/' . $service->serviceimage) }}" alt="Current Image"
                                    style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
                        <input type="file" class="form-control-file" id="serviceimage" name="serviceimage"
                            accept="image/*">
                        <small class="form-text text-muted">Leave empty to keep current image</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        @if($service->icon)
                            <div class="mb-2">
                                <img src="{{ asset('uploads/services/icons/' . $service->icon) }}" alt="Current Icon"
                                    style="max-width: 100px; max-height: 100px;">
                            </div>
                        @endif
                        <input type="file" class="form-control-file" id="icon" name="icon" accept="image/*">
                        <small class="form-text text-muted">Leave empty to keep current icon</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" {{ old('status', $service->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $service->status) == 0 ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <h5>Videos</h5>
            @if($service->videos && $service->videos->count() > 0)
                <div class="mb-3">
                    <h6>Existing Videos:</h6>
                    @foreach($service->videos as $video)
                        <div class="d-flex align-items-center mb-2">
                            @if($video->video_type == 'youtube')
                                <span class="mr-2">YouTube: {{ $video->youtube_url }}</span>
                            @else
                                <span class="mr-2">Uploaded: {{ $video->video_file }}</span>
                            @endif
                            <a href="{{ route('admin.service.video.delete', $video->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this video?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif

            <hr>

            <h5>Gallery</h5>
            @if($service->galleries && $service->galleries->count() > 0)
                <div class="row mb-3">
                    @foreach($service->galleries as $gallery)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ asset('uploads/services/gallery/' . $gallery->image) }}" class="card-img-top"
                                    alt="Gallery Image">
                                <div class="card-body p-2 text-center">
                                    <a href="{{ route('admin.service.gallery.delete', $gallery->id) }}"
                                        class="btn btn-sm btn-danger" onclick="return confirm('Delete this image?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <hr>

            <h5>SEO Settings</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo_title">SEO Title</label>
                        <input type="text" class="form-control" id="seo_title" name="seo_title"
                            value="{{ old('seo_title', $service->seo_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo_keywords">SEO Keywords</label>
                        <input type="text" class="form-control" id="seo_keywords" name="seo_keywords"
                            value="{{ old('seo_keywords', $service->seo_keywords) }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="seo_description">SEO Description</label>
                <textarea class="form-control" id="seo_description" name="seo_description"
                    rows="3">{{ old('seo_description', $service->seo_description) }}</textarea>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Service
            </button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> Cancel
            </a>
        </div>
    </form>
</div>
@stop

@section('css')
@stop

@section('js')
<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('ServicesText', {
        height: 300,
        toolbar: [
            { name: 'document', items: ['Source', '-', 'Preview'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize'] }
        ]
    });
</script>
@stop