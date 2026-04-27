@extends('adminlte::page')

@section('title', 'Edit Site Settings')

@section('content_header')
<h1>Edit Site Settings</h1>
@stop

@section('content')

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.settings.update', $content->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" name="companyname" class="form-control" id="companyname"
                                    value="{{ $content->companyname }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="copyrightyear">Copyright Year</label>
                                <input type="text" name="copyrightyear" class="form-control" id="copyrightyear"
                                    value="{{ $content->copyrightyear }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="logoimage">Site Logo</label>
                        @if($content->logoimage)
                            <div class="mb-2">
                                <img src="{{ asset($content->logoimage) }}" width="150" class="img-thumbnail d-block">
                            </div>
                        @endif
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="logoimage" class="custom-file-input" id="logoimage">
                                <label class="custom-file-label" for="logoimage">Choose file</label>
                            </div>
                        </div>
                        <small class="text-muted">Recommended size: 200x50px. Leave empty to keep current logo.</small>
                    </div>

                    <div class="form-group">
                        <label for="favicon">Site Favicon</label>
                        @if($content->favicon)
                            <div class="mb-2">
                                <img src="{{ asset($content->favicon) }}" width="32" class="img-thumbnail d-block">
                            </div>
                        @endif
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="favicon" class="custom-file-input" id="favicon">
                                <label class="custom-file-label" for="favicon">Choose file</label>
                            </div>
                        </div>
                        <small class="text-muted">Recommended size: 32x32px or 16x16px. Format: .png, .ico. Leave empty
                            to keep current favicon.</small>
                    </div>

                    <div class="form-group">
                        <label for="description">Description (Footer)</label>
                        <textarea name="description" class="form-control" id="description"
                            rows="3">{{ $content->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="operating_hours">Operating Hours</label>
                        <input type="text" name="operating_hours" class="form-control" id="operating_hours"
                            value="{{ $content->operating_hours }}">
                    </div>
                </div>
            </div>

            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ $content->email }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number"
                                    value="{{ $content->phone_number }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Physical Address</label>
                        <textarea name="address" class="form-control" id="address"
                            rows="2">{{ $content->address }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Social Media Links</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link"><i class="fab fa-facebook mr-1"></i> Facebook Link</label>
                                <input type="url" name="facebook_link" class="form-control" id="facebook_link"
                                    value="{{ $content->facebook_link }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter_link"><i class="fab fa-twitter mr-1"></i> Twitter (X) Link</label>
                                <input type="url" name="twitter_link" class="form-control" id="twitter_link"
                                    value="{{ $content->twitter_link }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin_link"><i class="fab fa-linkedin mr-1"></i> LinkedIn Link</label>
                                <input type="url" name="linkedin_link" class="form-control" id="linkedin_link"
                                    value="{{ $content->linkedin_link }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram_link"><i class="fab fa-instagram mr-1"></i> Instagram Link</label>
                                <input type="url" name="instagram_link" class="form-control" id="instagram_link"
                                    value="{{ $content->instagram_link }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save mr-1"></i> Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for Address
    CKEDITOR.replace('address', {
        height: 150,
        toolbar: [
            { name: 'document', items: ['Source'] },
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'tools', items: ['Maximize'] }
        ]
    });

    // Initialize CKEditor for Description
    CKEDITOR.replace('description', {
        height: 150,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'tools', items: ['Maximize'] }
        ]
    });

    $(document).ready(function () {
        if (window.bsCustomFileInput) {
            bsCustomFileInput.init();
        }

        // Force update CKEditor instances on form submit
        $('form').on('submit', function() {
            for (var instanceName in CKEDITOR.instances) {
                CKEDITOR.instances[instanceName].updateElement();
            }
        });
    });
</script>
@stop