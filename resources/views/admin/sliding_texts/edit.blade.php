@extends('adminlte::page')

@section('title', 'Edit Sliding Text')

@section('content_header')
    <h1>Edit Sliding Text</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('care.sliding-texts.update', $slidingText) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Text <span class="text-danger">*</span></label>
                <input type="text"
                       name="text"
                       class="form-control @error('text') is-invalid @enderror"
                       value="{{ old('text', $slidingText->text) }}"
                       required>
                @error('text')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Sort Order</label>
                <input type="number"
                       name="sort_order"
                       class="form-control"
                       value="{{ old('sort_order', $slidingText->sort_order) }}"
                       min="0"
                       style="max-width:120px;">
                <small class="text-muted">Lower numbers appear first.</small>
            </div>

            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox"
                           class="custom-control-input"
                           id="is_active"
                           name="is_active"
                           {{ old('is_active', $slidingText->is_active) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="is_active">Show on homepage</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Update
            </button>
            <a href="{{ route('care.sliding-texts.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </form>

    </div>
</div>

@stop
