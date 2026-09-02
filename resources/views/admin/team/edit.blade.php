@extends('adminlte::page')

@section('title', 'Edit Team Member')

@section('content_header')
    <h1>Edit Team Member</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('care.team.update', $team) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                {{-- Name --}}
                <div class="col-md-6 form-group">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" required
                           value="{{ old('name', $team->name) }}">
                </div>

                {{-- Qualification --}}
                <div class="col-md-6 form-group">
                    <label>Qualification *</label>
                    <input type="text" name="qualification" class="form-control" required
                           value="{{ old('qualification', $team->qualification) }}">
                </div>

                {{-- Career --}}
                <div class="col-md-6 form-group">
                    <label>Career</label>
                    <input type="text" name="career" class="form-control"
                           value="{{ old('career', $team->career) }}">
                </div>

                {{-- Experience --}}
                <div class="col-md-6 form-group">
                    <label>Experience</label>
                    <input type="text" name="experience" class="form-control"
                           value="{{ old('experience', $team->experience) }}">
                </div>

                {{-- Contact --}}
                <div class="col-md-6 form-group">
                    <label>Contact No</label>
                    <input type="text" name="contactno" class="form-control"
                           value="{{ old('contactno', $team->contactno) }}">
                </div>

                {{-- Email --}}
                <div class="col-md-6 form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email', $team->email) }}">
                </div>

                {{-- Description --}}
                <div class="col-md-12 form-group">
                    <label>Description *</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required>
                        {{ old('description', $team->description) }}
                    </textarea>
                </div>

                {{-- Profile Photo --}}
                <div class="col-md-6 form-group">
                    <label>Profile Photo</label>
                    <input type="file" name="profilephoto" class="form-control">

                    @if($team->profilephoto)
                        <img src="{{ asset('uploads/team/'.$team->profilephoto) }}"
                             class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                {{-- Banner Image --}}
                <div class="col-md-6 form-group">
                    <label>Banner Image</label>
                    <input type="file" name="bannerimage" class="form-control">

                    @if($team->bannerimage)
                        <img src="{{ asset('uploads/team/'.$team->bannerimage) }}"
                             class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                {{-- Social Links --}}
                <div class="col-md-6 form-group">
                    <label>Instagram</label>
                    <input type="text" name="instagramlink" class="form-control"
                           value="{{ old('instagramlink', $team->instagramlink) }}">
                </div>
                <div class="col-md-6 form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebooklink" class="form-control"
                           value="{{ old('facebooklink', $team->facebooklink) }}">
                </div>
                <div class="col-md-6 form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitterlink" class="form-control"
                           value="{{ old('twitterlink', $team->twitterlink) }}">
                </div>
                <div class="col-md-6 form-group">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedinlink" class="form-control"
                           value="{{ old('linkedinlink', $team->linkedinlink) }}">
                </div>

                {{-- Status --}}
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ $team->status ? 'selected':'' }}>Active</option>
                        <option value="0" {{ !$team->status ? 'selected':'' }}>Inactive</option>
                    </select>
                </div>

            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Update
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
