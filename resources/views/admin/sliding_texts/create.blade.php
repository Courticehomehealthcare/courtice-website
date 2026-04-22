@extends('adminlte::page')

@section('title', 'Add Sliding Text')

@section('content_header')
    <h1>Add Sliding Text</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.sliding-texts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Text <span class="text-danger">*</span></label>
                <input type="text"
                       name="text"
                       class="form-control @error('text') is-invalid @enderror"
                       value="{{ old('text') }}"
                       placeholder="e.g. Get 20% off your first healthcare service."
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
                       value="{{ old('sort_order', 0) }}"
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
                           {{ old('is_active', true) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="is_active">Show on homepage</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>
            <a href="{{ route('admin.sliding-texts.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </form>

    </div>
</div>

@stop
