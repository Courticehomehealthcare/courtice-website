@extends('adminlte::page')

@section('content')

<div class="container">
    <h3>Client Images</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Upload Form -->
    <form method="POST" action="{{ route('admin.client.images.upload') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Select Images</label>
            <input type="file" name="actorimages[]" multiple class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2">Upload</button>
    </form>

    <hr>

    <!-- Images List -->
    <div class="row">
        @foreach($images as $img)
            <div class="col-md-3 mt-3">
                <div class="card shadow-sm border-0 table-wrapper">
                    <img src="{{ asset($img->image_path) }}" class="card-img-top" style="height:200px;object-fit:cover">
                    <div class="card-body text-center">
<form action="{{ route('admin.client.images.delete', ['id' => $img->clientid]) }}"
      method="POST"
      onsubmit="return confirm('Delete this image?')">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger btn-sm">
        Delete
    </button>
</form>



                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
