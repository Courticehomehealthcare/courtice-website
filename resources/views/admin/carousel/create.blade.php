@extends('adminlte::page')

@section('title', 'Add Carousel')

@section('css')
<style>
    .preview-container {
        margin-top: 15px;
        display: none;
    }
    #preview-image {
        max-width: 300px;
        height: auto;
        border: 2px solid #007bff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>
@stop

@section('content_header')
<h1>Add Carousel</h1>
@stop

@section('content')

<form action="{{ route('care.carousel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Slide Title *</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Button Text *</label>
                        <input type="text" name="button_text" class="form-control" required>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Description *</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label>Button Link *</label>
                <input type="url" name="button_link" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Slide Image * <span class="text-danger">(Required Size: 650 x 650 px)</span></label>
                <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" required>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>Select Page *</label>
                <select name="page" class="form-control" required>
                    <option value="home">Homepage</option>
                    <option value="aboutus">About Us</option>
                    <option value="services">Services Page</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status *</label>
                <select name="status" class="form-control" required>
                    <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active (Show)</option>
                    <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Inactive (Hide)</option>
                </select>
            </div>



            <button class="btn btn-success"><i class="fas fa-save"></i> Save</button>
            <a href="{{ route('care.carousel.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

</form>

@stop

@section('js')
<script>
    $(document).ready(function() {
        const fileInput = $('input[name="image"]');
        
        // Simple preview of the selected file
        fileInput.on('change', function(e) {
            const files = e.target.files;
            if (files && files.length > 0) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    // You could add a simple non-cropping preview here if desired
                };
                reader.readAsDataURL(files[0]);
            }
        });
    });
</script>
@stop