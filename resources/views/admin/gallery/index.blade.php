@extends('adminlte::page')

@section('title', 'Gallery')

@section('content_header')
    <h1>Gallery Management</h1>
@stop

@section('content')

{{-- Upload Form --}}
<div class="card mb-4">
    <div class="card-header">Upload Images</div>
    <div class="card-body">

        <form action="{{ route('care.gallery.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                {{-- Images --}}
                <div class="col-md-4">
                    <label>Select Images</label>
                    <input type="file" name="actorimages[]" class="form-control" multiple required>
                </div>

                {{-- Image Names --}}
                <div class="col-md-4">
                    <label>Image Names (Same Order)</label>
                    <input type="text" name="image_name[]" class="form-control mb-2">
                    <small class="text-muted">Add as many name fields as uploaded images</small>
                </div>

                {{-- Project Links --}}
                <div class="col-md-4">
                    <label>Project Links (Same Order)</label>
                    <input type="url" name="project_link[]" class="form-control mb-2" placeholder="https://example.com">
                    <small class="text-muted">Optional – add links in same order</small>
                </div>

            </div>

            <button class="btn btn-primary mt-3">Upload</button>
        </form>

    </div>
</div>

{{-- FILTER BUTTONS --}}
<div class="mb-4">
    <button class="btn btn-dark filter-btn active" data-filter="all">All</button>

    @foreach($names as $name)
        <button class="btn btn-outline-dark filter-btn" data-filter="{{ $name }}">
            {{ $name }}
        </button>
    @endforeach
</div>

{{-- Gallery List --}}
<div class="row" id="gallery-wrapper">
    @foreach($gallery as $img)
        <div class="col-md-3 mb-4 gallery-item"
             data-name="{{ $img->image_name }}"
             data-link="{{ $img->project_link }}">

            <div class="card shadow-sm border-0 table-wrapper">
                <img src="{{ asset($img->image_path) }}"
                     class="card-img-top"
                     style="height:200px; object-fit:cover;">

                <div class="card-body text-center">
                    <p class="mb-1">{{ $img->image_name }}</p>

                    @if($img->project_link)
                        <a href="{{ $img->project_link }}"
                           target="_blank"
                           class="btn btn-sm btn-primary mb-2">
                            View Project
                        </a>
                    @endif

                    <form action="{{ route('care.gallery.destroy', $img->galleryid) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block btn-sm">
                            Delete
                        </button>
                    </form>
                </div>
            </div>

        </div>
    @endforeach
</div>

@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.gallery-item');

    buttons.forEach(btn => {
        btn.addEventListener('click', function () {

            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            let filter = this.getAttribute('data-filter');

            items.forEach(item => {
                let name = item.getAttribute('data-name');

                if (filter === 'all' || filter === name) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

        });
    });

});
</script>

<style>
.filter-btn.active {
    background: #000 !important;
    color: #fff !important;
}
</style>
@endsection
