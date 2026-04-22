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
                <select name="page" class="form-control" required>
                    <option value="home">Homepage</option>
                    <option value="services">Services Page</option>
                </select>
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
