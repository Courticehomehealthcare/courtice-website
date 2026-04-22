@extends('adminlte::page')

@section('title', 'Edit Carousel')

@section('content_header')
<h1>Edit Carousel</h1>
@stop

@section('content')

<form action="{{ route('admin.carousel.update', $carousel) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
                        <input type="text" name="title" class="form-control" value="{{ $carousel->title }}" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Button Text *</label>
                        <input type="text" name="button_text" class="form-control" value="{{ $carousel->button_text }}"
                            required>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Description *</label>
                <textarea name="description" class="form-control" rows="4" required>
                    {{ $carousel->description }}
                </textarea>
            </div>

            <div class="form-group">
                <label>Button Link *</label>
                <input type="url" name="button_link" class="form-control" value="{{ $carousel->button_link }}" required>
            </div>


            <div class="form-group">
                <label>Slide Image</label>
                <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
                <img src="{{ asset($carousel->image_url) }}" width="150" class="img-thumbnail">
            </div>

            <div class="form-group">
                <label>Select Page *</label>
                <select name="page" class="form-control" required>
                    <option value="home" {{ $carousel->page == 'home' ? 'selected' : '' }}>Homepage</option>
                    <option value="services" {{ $carousel->page == 'services' ? 'selected' : '' }}>Services Page</option>
                </select>
            </div>

            <button class="btn btn-success"><i class="fas fa-save"></i> Update</button>

            <a href="{{ route('admin.carousel.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>

        </div>
    </div>

</form>

@stop