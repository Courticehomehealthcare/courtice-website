<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="categoriename">Category Name</label>
                    <input type="text" name="categoriename" id="categoriename" class="form-control @error('categoriename') is-invalid @enderror" value="{{ old('categoriename', $category->categoriename ?? '') }}" required>
                    @error('categoriename')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug (Leave blank for automatic)</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $category->slug ?? '') }}">
                    @error('slug')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $category->description ?? '') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Category Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if(isset($category) && $category->image)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/categories/' . $category->image) }}" width="100">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ old('status', $category->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $category->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <hr>
        <h5>SEO Settings</h5>
        <div class="form-group">
            <label for="seo_title">SEO Title</label>
            <input type="text" name="seo_title" id="seo_title" class="form-control" value="{{ old('seo_title', $category->seo_title ?? '') }}">
        </div>
        <div class="form-group">
            <label for="seo_description">SEO Description</label>
            <textarea name="seo_description" id="seo_description" class="form-control" rows="2">{{ old('seo_description', $category->seo_description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="seo_keywords">SEO Keywords</label>
            <input type="text" name="seo_keywords" id="seo_keywords" class="form-control" value="{{ old('seo_keywords', $category->seo_keywords ?? '') }}">
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Save Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>
