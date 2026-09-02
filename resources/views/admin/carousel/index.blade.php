@extends('adminlte::page')

@section('title', 'Carousel')

@section('content_header')
    <h1>Carousel Items</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">Carousel Items</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('care.carousel.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add New Slide
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Button</th>
                    <th>Page</th>
                    <th>Status</th>
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
                            @elseif($c->page == 'aboutus')
                                <span class="badge badge-warning">About Us</span>
                            @else
                                <span class="badge badge-success">Homepage</span>
                            @endif
                        </td>
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input status-toggle" 
                                       id="status-{{ $c->id }}" data-id="{{ $c->id }}" {{ $c->status ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status-{{ $c->id }}">
                                    <span class="{{ $c->status ? 'text-success' : 'text-danger' }}" id="status-label-{{ $c->id }}">
                                        {{ $c->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </label>
                            </div>
                        </td>

                        <td>
                            <a href="{{ route('care.carousel.edit', $c) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('care.carousel.destroy', $c) }}"
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
        <div class="d-flex justify-content-end mt-4">
            {{ $carousels->links('pagination::bootstrap-4') }}
        </div>

        


    </div>
</div>

@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.status-toggle').on('change', function() {
            var carouselId = $(this).data('id');
            var status = this.checked ? 1 : 0;
            var label = $('#status-label-' + carouselId);

            $.ajax({
                url: "{{ url('admin/carousel') }}/" + carouselId + "/toggle-status",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(response) {
                    if(response.success) {
                        if (status == 1) {
                            label.text('Active').removeClass('text-danger').addClass('text-success');
                        } else {
                            label.text('Inactive').removeClass('text-success').addClass('text-danger');
                        }
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                },
                error: function() {
                    alert('Error connecting to the server.');
                }
            });
        });
    });
</script>
@stop
