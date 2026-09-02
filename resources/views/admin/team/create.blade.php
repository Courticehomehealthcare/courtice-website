@extends('adminlte::page')

@section('title', 'Add Team Member')

@section('content_header')
    <h1>Add Team Member</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('care.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                {{-- Name --}}
                <div class="col-md-6 form-group">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                {{-- Qualification --}}
                <div class="col-md-6 form-group">
                    <label>Qualification *</label>
                    <input type="text" name="qualification" class="form-control" required>
                </div>

                {{-- Career --}}
                <div class="col-md-6 form-group">
                    <label>Career</label>
                    <input type="text" name="career" class="form-control">
                </div>

                {{-- Experience --}}
                <div class="col-md-6 form-group">
                    <label>Experience</label>
                    <input type="text" name="experience" class="form-control">
                </div>

                {{-- Contact --}}
                <div class="col-md-6 form-group">
                    <label>Contact No</label>
                    <input type="text" name="contactno" class="form-control">
                </div>

                {{-- Email --}}
                <div class="col-md-6 form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                {{-- Description --}}
                <div class="col-md-12 form-group">
                    <label>Description *</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                </div>

                {{-- Profile Photo --}}
                <div class="col-md-6 form-group">
                    <label>Profile Photo</label>
                    <input type="file" name="profilephoto" class="form-control">
                </div>

                {{-- Banner Image --}}
                <div class="col-md-6 form-group">
                    <label>Banner Image</label>
                    <input type="file" name="bannerimage" class="form-control">
                </div>

                {{-- Social Media --}}
                <div class="col-md-6 form-group">
                    <label>Instagram Link</label>
                    <input type="text" name="instagramlink" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Facebook Link</label>
                    <input type="text" name="facebooklink" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Twitter Link</label>
                    <input type="text" name="twitterlink" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>LinkedIn Link</label>
                    <input type="text" name="linkedinlink" class="form-control">
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>

            <a href="{{ route('care.team.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>

        </form>

    </div>
</div>

@stop

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@stop
