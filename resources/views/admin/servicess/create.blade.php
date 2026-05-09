@extends('adminlte::page')

@section('title', 'Create Service')

@section('content_header')
<h1>Create New Service</h1>
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
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                            id="ServicesTitle" name="ServicesTitle" value="{{ old('ServicesTitle') }}" required>
                        @error('ServicesTitle')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="servicesUrl">Service URL Slug</label>
                        <input type="text" class="form-control" id="servicesUrl" name="servicesUrl"
                            value="{{ old('servicesUrl') }}" placeholder="Auto-generated if left empty">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pagecategory">Page Category <span class="text-danger">*</span></label>
                        <select class="form-control @error('pagecategory') is-invalid @enderror" id="pagecategory" name="pagecategory" required>
                            <option value="services" {{ old('pagecategory', 'services') == 'services' ? 'selected' : '' }}>Services</option>
                            <option value="products" {{ old('pagecategory') == 'products' ? 'selected' : '' }}>Products</option>
                        </select>
                        @error('pagecategory')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pagesubcategory">Page Subcategory</label>
                        <select class="form-control" id="pagesubcategory" name="pagesubcategory">
                            <option value="">Select Subcategory</option>
                            <option value="productrentals" {{ old('pagesubcategory') == 'productrentals' ? 'selected' : '' }}>productrentals</option>
                            <option value="Online & In-Store Shipping Options" {{ old('pagesubcategory') == 'Online & In-Store Shipping Options' ? 'selected' : '' }}>Online & In-Store Shipping Options</option>
                            <option value="latest products" {{ old('pagesubcategory') == 'latest products' ? 'selected' : '' }}>latest products</option>
                            <option value="services" {{ old('pagesubcategory') == 'services' ? 'selected' : '' }}>services</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="ServicesText">Service Description <span class="text-danger">*</span></label>
                <textarea class="form-control @error('ServicesText') is-invalid @enderror" id="ServicesText"
                    name="ServicesText" rows="10" required>{{ old('ServicesText') }}</textarea>
                @error('ServicesText')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="serviceimage">Service Image</label>
                        <input type="file" class="form-control-file" id="serviceimage" name="serviceimage"
                            accept="image/*">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="file" class="form-control-file" id="icon" name="icon" accept="image/*">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <h5>SEO Settings</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo_title">SEO Title</label>
                        <input type="text" class="form-control" id="seo_title" name="seo_title"
                            value="{{ old('seo_title') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo_keywords">SEO Keywords</label>
                        <input type="text" class="form-control" id="seo_keywords" name="seo_keywords"
                            value="{{ old('seo_keywords') }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="seo_description">SEO Description</label>
                <textarea class="form-control" id="seo_description" name="seo_description"
                    rows="3">{{ old('seo_description') }}</textarea>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Create Service
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

    // Auto-generate slug from title
    $('#ServicesTitle').on('input', function () {
        if ($('#servicesUrl').val() === '') {
            let slug = $(this).val()
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '');
            $('#servicesUrl').val(slug);
        }
    });
</script>
@stop