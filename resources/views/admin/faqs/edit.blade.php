@extends('adminlte::page')

@section('title', 'Edit FAQ')

@section('content_header')
    <h1>Edit FAQ</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Question *</label>
                <input type="text" name="question" class="form-control"
                       value="{{ old('question', $faq->question) }}" required>
            </div>

            <div class="form-group">
                <label>Select Page *</label>
                <select name="page" class="form-control" required>
                    <option value="home" {{ old('page', $faq->page) == 'home' ? 'selected' : '' }}>Homepage</option>
                    <option value="services" {{ old('page', $faq->page) == 'services' ? 'selected' : '' }}>Services Page</option>
                </select>
            </div>

            <div class="form-group">
                <label>Answer *</label>
                <textarea id="answer" name="answer" class="form-control" rows="5" required>{{ old('answer', $faq->answer) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Update FAQ
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
