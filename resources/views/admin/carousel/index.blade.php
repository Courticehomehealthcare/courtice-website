@extends('adminlte::page')

@section('title', 'Carousel')

@section('content_header')
    <h1>Carousel Items</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.carousel.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add New Slide
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Button</th>
                    <th>Page</th>
                    <th width="150px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousels as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <img src="{{ asset($c->image_url) }}" width="80" class="img-thumbnail">
                        </td>

                        <td>{{ $c->title }}</td>

                        <td>{{ $c->button_text }}</td>
                        <td>
                            @if ($c->page == 'services')
                                <span class="badge badge-info">Services Page</span>
                            @else
                                <span class="badge badge-success">Homepage</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('admin.carousel.edit', $c) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.carousel.destroy', $c) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this item?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@stop
