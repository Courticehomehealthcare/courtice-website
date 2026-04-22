@extends('adminlte::page')

@section('title', 'Sliding Texts')

@section('content_header')
<h1>Sliding Text List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.sliding-texts.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add Sliding Text
</a>

<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Text</th>
                    <th width="100">Sort Order</th>
                    <th width="80">Active</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($slidingTexts as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->text }}</td>
                        <td>{{ $item->sort_order }}</td>
                        <td>
                            @if ($item->is_active)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-secondary">Hidden</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.sliding-texts.edit', $item) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.sliding-texts.destroy', $item) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Delete this item?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No sliding texts found. Add one!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@stop