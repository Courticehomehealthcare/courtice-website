@extends('adminlte::page')

@section('title', 'Add FAQ')

@section('content_header')
    <h1>Add New FAQ</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Question *</label>
                <input type="text" name="question" class="form-control"
                       value="{{ old('question') }}" required>
            </div>

            <div class="form-group">
                <label>Select Page *</label>
                <div class="checkbox-group @error('page') is-invalid @enderror">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="page[]" id="page_home" value="home" {{ is_array(old('page')) && in_array('home', old('page')) ? 'checked' : '' }}>
                        <label for="page_home" class="custom-control-label">Homepage</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="page[]" id="page_services" value="services" {{ is_array(old('page')) && in_array('services', old('page')) ? 'checked' : '' }}>
                        <label for="page_services" class="custom-control-label">Services Page</label>
                    </div>
                </div>
                @error('page')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Answer *</label>
                <textarea id="answer" name="answer" class="form-control" rows="5" required>{{ old('answer') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Create FAQ
            </button>

            <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </form>

    </div>
</div>

@stop

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('answer');
</script>
@stop
