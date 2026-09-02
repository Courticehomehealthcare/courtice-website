<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name ?? '') }}" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>{{ $category->categoriename }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="slug">Slug (Leave blank for automatic)</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $product->slug ?? '') }}">
                    @error('slug')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $product->sku ?? '') }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="2">{{ old('short_description', $product->short_description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="description">Full Description</label>
            <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="main_image">Main Image</label>
                    <input type="file" name="main_image" id="main_image" class="form-control-file">
                    @if(isset($product) && $product->main_image)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/products/' . $product->main_image) }}" width="100">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ old('status', $product->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $product->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="gallery">Gallery Images</label>
            <input type="file" name="gallery[]" id="gallery" class="form-control-file" multiple>
            @if(isset($product) && $product->images->count() > 0)
                <div class="row mt-2">
                    @foreach($product->images as $img)
                        <div class="col-md-2 mb-3 text-center">
                            <div class="position-relative">
                                <img src="{{ asset('uploads/products/gallery/' . $img->image) }}" class="img-thumbnail" style="height: 100px; object-fit: cover;">
                                <button type="button" class="btn btn-danger btn-xs position-absolute delete-gallery-image" 
                                    style="top: -5px; right: -5px;" 
                                    data-id="{{ $img->id }}"
                                    onclick="if(confirm('Delete this image?')) { window.location.href='{{ route('care.products.image.delete', $img->id) }}'; }">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <hr>
        <h5>SEO Settings</h5>
        <div class="form-group">
            <label for="seo_title">SEO Title</label>
            <input type="text" name="seo_title" id="seo_title" class="form-control" value="{{ old('seo_title', $product->seo_title ?? '') }}">
        </div>
        <div class="form-group">
            <label for="seo_description">SEO Description</label>
            <textarea name="seo_description" id="seo_description" class="form-control" rows="2">{{ old('seo_description', $product->seo_description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="seo_keywords">SEO Keywords</label>
            <input type="text" name="seo_keywords" id="seo_keywords" class="form-control" value="{{ old('seo_keywords', $product->seo_keywords ?? '') }}">
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Save Product</button>
        <a href="{{ route('care.products.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const shortDesc = document.getElementById('short_description');
        const seoDesc = document.getElementById('seo_description');

        if (shortDesc && seoDesc) {
            let manualChange = false;

            seoDesc.addEventListener('input', function() {
                manualChange = true;
            });

            shortDesc.addEventListener('input', function() {
                if (!manualChange) {
                    seoDesc.value = this.value;
                }
            });
        }
    });
</script>
@stop
