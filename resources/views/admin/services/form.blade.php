<script>
    function seoValidator(inputId, counterId, errorId, limit) {
        const input = document.getElementById(inputId);
        const counter = document.getElementById(counterId);
        const error = document.getElementById(errorId);

        if (!input) return;

        function validate() {
            const length = input.value.length;
            counter.textContent = length;

            if (length > limit) {
                input.classList.add("is-invalid");
                counter.classList.add("char-danger");
                error.classList.remove("d-none");
            } else {
                input.classList.remove("is-invalid");
                counter.classList.remove("char-danger");
                error.classList.add("d-none");
            }
        }

        validate();
        input.addEventListener("input", validate);
    }

    document.addEventListener("DOMContentLoaded", function () {
        seoValidator("seo_title", "seoTitleCount", "seoTitleError", 60);
        seoValidator("seo_description", "seoDescCount", "seoDescError", 160);
        seoValidator("seo_keywords", "seoKeyCount", "seoKeyError", 255);

        seoValidator("og_title", "ogTitleCount", "ogTitleError", 60);
        seoValidator("og_description", "ogDescCount", "ogDescError", 200);

        seoValidator("twitter_title", "twTitleCount", "twTitleError", 70);
        seoValidator("twitter_description", "twDescCount", "twDescError", 200);
    });
</script>



<div class="card">
    <div class="card-body">

        <div class="row">

            {{-- Title --}}
            <div class="form-group col-lg-4">
                <label>Service Title *</label>
                <input type="text" name="ServicesTitle" id="titleInput" class="form-control"
                    value="{{ old('ServicesTitle', $service->ServicesTitle ?? '') }}" required>
            </div>

            {{-- Slug --}}
            <div class="form-group col-lg-4">
                <label>Service URL (slug)</label>
                <input type="text" name="servicesUrl" id="slugInput" class="form-control"
                    value="{{ old('servicesUrl', $service->servicesUrl ?? '') }}">
            </div>

            {{-- Category --}}
            <div class="form-group col-lg-4">
                <label>Page Category *</label>
                <select name="pagecategory" id="pageCategory" class="form-control" required>
                    <option value="">Select Category</option>
                    <option value="services" {{ old('pagecategory', $service->pagecategory ?? '') == 'services' ? 'selected' : '' }}>
                        services
                    </option>

                    <option value="products" {{ old('pagecategory', $service->pagecategory ?? '') == 'products' ? 'selected' : '' }}>
                        products
                    </option>
                    <option value="productrentals" {{ old('pagecategory', $service->pagecategory ?? '') == 'productrentals' ? 'selected' : '' }}>
                        productrentals
                    </option>
                </select>


            </div>

            {{-- Sub Category --}}


            <div class="form-group col-lg-4">
                <label>Page Sub Category</label>
                <select name="pagesubcategory" id="pageSubCategory" class="form-control">
                    <option value="">Select Sub Category</option>
                </select>
            </div>



            {{-- Banner Title --}}
            <div class="form-group col-lg-4">
                <label>Banner Title</label>
                <input type="text" name="bannertitle" class="form-control"
                    value="{{ old('bannertitle', $service->bannertitle ?? '') }}">
            </div>

            {{-- Banner Video URL --}}
            <div class="form-group col-lg-4">
                <label>Banner Video URL</label>
                <input type="text" name="bannervideourl" class="form-control"
                    value="{{ old('bannervideourl', $service->bannervideourl ?? '') }}">
            </div>

            {{-- YouTube Video --}}
            <div class="form-group col-lg-4">
                <label>YouTube Video URL</label>
                <input type="text" name="youtubevideo" class="form-control"
                    value="{{ old('youtubevideo', $service->youtubevideo ?? '') }}">
            </div>

            {{-- Service Icon (Image Upload) --}}
            <div class="form-group col-lg-4">
                <label>Service Icon (Image)</label>
                <input type="file" name="icon" class="form-control" accept="image/*">

                @if(isset($service) && $service->icon)
                    <img src="{{ asset('uploads/services/icons/' . $service->icon) }}" class="img-thumbnail mt-2"
                        width="80">
                @endif
            </div>

            {{-- Navbar Text --}}
            <div class="form-group col-lg-4">
                <label>Navbar Text</label>
                <input type="text" name="navbartext" class="form-control"
                    value="{{ old('navbartext', $service->navbartext ?? '') }}">
            </div>

            {{-- Date --}}
            <div class="form-group col-lg-4">
                <label>Service Date</label>
                <input type="date" name="servicesdate" class="form-control"
                    value="{{ old('servicesdate', $service->servicesdate ?? now()->toDateString()) }}">
            </div>

            {{-- Service Description FULL WIDTH --}}
            <div class="form-group col-lg-12">
                <label>Service Description *</label>
                <textarea id="ServicesText" name="ServicesText" class="form-control" rows="6" required>
                    {{ old('ServicesText', $service->ServicesText ?? '') }}
                </textarea>
            </div>

            {{-- Other Info FULL WIDTH --}}
            <div class="form-group col-lg-12">
                <label>Other Info</label>
                <textarea name="other" class="form-control" rows="4">
                    {{ old('other', $service->other ?? '') }}
                </textarea>
            </div>

            {{-- Service Image FULL WIDTH --}}
            <div class="form-group col-lg-12">
                <label>Service Image *</label>
                <input type="file" name="serviceimage" class="form-control" accept="image/*">

                @if(isset($service) && $service->serviceimage)
                    <img src="{{ asset('uploads/services/' . $service->serviceimage) }}" class="img-thumbnail mt-2"
                        width="150">
                @endif
            </div>

            {{-- Status --}}
            <div class="form-group col-lg-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ old('status', $service->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $service->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            {{-- ================= SEO SETTINGS ================= --}}
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h4 class="mb-3 border-bottom pb-2">SEO Settings</h4>
                </div>

                <div class="form-group col-lg-6">
                    <label>
                        SEO Title
                        <small>(<span id="seoTitleCount">0</span>/60)</small>
                    </label>

                    <input type="text" id="seo_title" name="seo_title" class="form-control" maxlength="60"
                        value="{{ old('seo_title', $service->seo_title ?? '') }}">

                    <small class="text-danger d-none" id="seoTitleError">
                        Max 60 characters allowed
                    </small>
                </div>


                {{-- Canonical URL --}}
                <div class="form-group col-lg-6">
                    <label>Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control"
                        value="{{ old('canonical_url', $service->canonical_url ?? '') }}"
                        placeholder="https://example.com/service/slug">
                </div>

                {{-- SEO Description --}}
                <div class="form-group col-lg-12">
                    <label>
                        SEO Description
                        <small>(<span id="seoDescCount">0</span>/160)</small>
                    </label>

                    <textarea id="seo_description" name="seo_description" class="form-control" rows="3"
                        maxlength="160">{{ old('seo_description', $service->seo_description ?? '') }}</textarea>

                    <small class="text-danger d-none" id="seoDescError">
                        Max 160 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-12">-->
                <!--    <label>SEO Description</label>-->
                <!--    <textarea name="seo_description" class="form-control" rows="3"-->
                <!--        placeholder="Meta description (max 160 chars)">{{ old('seo_description', $service->seo_description ?? '') }}</textarea>-->
                <!--</div>-->

                {{-- SEO Keywords --}}
                <div class="form-group col-lg-12">
                    <label>
                        SEO Keywords
                        <small>(<span id="seoKeyCount">0</span>/255)</small>
                    </label>

                    <textarea id="seo_keywords" name="seo_keywords" class="form-control" rows="2"
                        maxlength="255">{{ old('seo_keywords', $service->seo_keywords ?? '') }}</textarea>

                    <small class="text-danger d-none" id="seoKeyError">
                        Max 255 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-12">-->
                <!--    <label>SEO Keywords</label>-->
                <!--    <textarea name="seo_keywords" class="form-control" rows="2"-->
                <!--        placeholder="keyword1, keyword2, keyword3">{{ old('seo_keywords', $service->seo_keywords ?? '') }}</textarea>-->
                <!--</div>-->

                {{-- Open Graph Title --}}
                <div class="form-group col-lg-6">
                    <label>
                        OG Title
                        <small>(<span id="ogTitleCount">0</span>/60)</small>
                    </label>

                    <input type="text" id="og_title" name="og_title" class="form-control" maxlength="60"
                        value="{{ old('og_title', $service->og_title ?? '') }}">

                    <small class="text-danger d-none" id="ogTitleError">
                        Max 60 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-6">-->
                <!--    <label>OG Title (Facebook / WhatsApp)</label>-->
                <!--    <input type="text" name="og_title" class="form-control"-->
                <!--        value="{{ old('og_title', $service->og_title ?? '') }}">-->
                <!--</div>-->

                {{-- Twitter Title --}}
                <div class="form-group col-lg-6">
                    <label>
                        Twitter Title
                        <small>(<span id="twTitleCount">0</span>/70)</small>
                    </label>

                    <input type="text" id="twitter_title" name="twitter_title" class="form-control" maxlength="70"
                        value="{{ old('twitter_title', $service->twitter_title ?? '') }}">

                    <small class="text-danger d-none" id="twTitleError">
                        Max 70 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-6">-->
                <!--    <label>Twitter Title</label>-->
                <!--    <input type="text" name="twitter_title" class="form-control"-->
                <!--        value="{{ old('twitter_title', $service->twitter_title ?? '') }}">-->
                <!--</div>-->

                {{-- Open Graph Description --}}
                <div class="form-group col-lg-12">
                    <label>
                        OG Description
                        <small>(<span id="ogDescCount">0</span>/200)</small>
                    </label>

                    <textarea id="og_description" name="og_description" class="form-control" rows="3"
                        maxlength="200">{{ old('og_description', $service->og_description ?? '') }}</textarea>

                    <small class="text-danger d-none" id="ogDescError">
                        Max 200 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-12">-->
                <!--    <label>OG Description</label>-->
                <!--    <textarea name="og_description" class="form-control"-->
                <!--        rows="3">{{ old('og_description', $service->og_description ?? '') }}</textarea>-->
                <!--</div>-->

                {{-- Twitter Description --}}
                <div class="form-group col-lg-12">
                    <label>
                        Twitter Description
                        <small>(<span id="twDescCount">0</span>/200)</small>
                    </label>

                    <textarea id="twitter_description" name="twitter_description" class="form-control" rows="3"
                        maxlength="200">{{ old('twitter_description', $service->twitter_description ?? '') }}</textarea>

                    <small class="text-danger d-none" id="twDescError">
                        Max 200 characters allowed
                    </small>
                </div>

                <!--<div class="form-group col-lg-12">-->
                <!--    <label>Twitter Description</label>-->
                <!--    <textarea name="twitter_description" class="form-control"-->
                <!--        rows="3">{{ old('twitter_description', $service->twitter_description ?? '') }}</textarea>-->
                <!--</div>-->

                {{-- OG Image --}}
                <div class="form-group col-lg-6">
                    <label>OG Image</label>
                    <input type="file" name="og_image" class="form-control" accept="image/*">

                    @if(!empty($service->og_image))
                        <img src="{{ asset('uploads/services/' . $service->og_image) }}" class="img-thumbnail mt-2"
                            width="120">
                    @endif
                </div>

                {{-- Twitter Image --}}
                <div class="form-group col-lg-6">
                    <label>Twitter Image</label>
                    <input type="file" name="twitter_image" class="form-control" accept="image/*">

                    @if(!empty($service->twitter_image))
                        <img src="{{ asset('uploads/services/' . $service->twitter_image) }}" class="img-thumbnail mt-2"
                            width="120">
                    @endif
                </div>
            </div>
            {{-- ================= END SEO SETTINGS ================= --}}




            <div class="col-lg-12 mt-4">
                <label>Upload Own Videos</label>

                {{-- Existing Uploaded Videos --}}
                @if(isset($service))
                    <div class="row mb-3">
                        @foreach($service->videos->where('video_type', 'upload') as $v)
                            <div class="col-md-3 text-center mb-3">
                                <video width="100%" controls>
                                    <source src="{{ asset('uploads/services/videos/' . $v->video_file) }}" type="video/mp4">
                                </video>

                                <a href="{{ route('care.service.video.delete', $v->id) }}" class="btn btn-sm btn-danger mt-2"
                                    onclick="return confirm('Delete this video?')">
                                    Delete
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                {{-- Upload New Videos --}}
                <input type="file" name="upload_videos[]" class="form-control" multiple
                    accept="video/mp4,video/webm,video/ogg">
            </div>



            <div class="col-lg-12 mt-4">
                <label>YouTube Videos</label>

                {{-- Existing YouTube Videos (DISPLAY ONLY) --}}
                @if(isset($service))
                    @foreach($service->videos->where('video_type', 'youtube') as $v)
                        <div class="d-flex mb-2">
                            <input type="text" class="form-control" value="{{ $v->youtube_url }}" readonly>

                            <a href="{{ route('care.service.video.delete', $v->id) }}" class="btn btn-danger btn-sm ml-2"
                                onclick="return confirm('Delete this video?')">
                                X
                            </a>
                        </div>
                    @endforeach
                @endif

                {{-- New YouTube Videos --}}
                <div id="videoArea"></div>

                <button type="button" class="btn btn-sm btn-primary mt-2" onclick="addVideo()">
                    + Add More
                </button>
            </div>




            <!--    <div class="col-lg-12">-->
            <!--    <label>YouTube Videos</label>-->

            <!--    @if(isset($service) && $service->videos->count())-->
            <!--        @foreach($service->videos as $v)-->
            <!--            <div class="d-flex mb-2">-->
            <!--                <input type="text" name="videos[]" class="form-control" value="{{ $v->youtube_url }}">-->
            <!--                <a href="{{ route('care.service.video.delete',$v->id) }}"-->
            <!--                   class="btn btn-danger btn-sm ml-2"-->
            <!--                   onclick="return confirm('Delete this video?')">X</a>-->
            <!--            </div>-->
            <!--        @endforeach-->
            <!--    @else-->
            <!--        <input type="text" name="videos[]" class="form-control mb-2" placeholder="YouTube URL">-->
            <!--    @endif-->

            <!--    <div id="videoArea"></div>-->
            <!--    <button type="button" class="btn btn-sm btn-primary mt-2" onclick="addVideo()">+ Add More</button>-->
            <!--</div>-->

        </div>


        <div class="col-lg-12 mt-3">
            <label>Gallery Images</label>

            @if(isset($service) && $service->galleries->count())
                <div class="row mb-3">
                    @foreach($service->galleries as $g)
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('uploads/services/gallery/' . $g->image) }}" class="img-thumbnail mb-2">

                            <a href="{{ route('care.service.gallery.delete', $g->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this image?')">
                                Delete
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif

            <input type="file" name="gallery[]" multiple class="form-control">
        </div>



        <!-- <div class="col-lg-12 mt-3">
                <label>Gallery Images</label>
                <input type="file" name="gallery[]" multiple class="form-control">
            </div> -->

        <!-- <script>
                function addVideo() {
                    document.getElementById("videoArea").innerHTML +=
                        `<input type="text" name="videos[]" class="form-control mt-2" placeholder="YouTube URL">`;
                }
            </script> -->


        <script>
            function addVideo() {
                const div = document.createElement("div");
                div.className = "d-flex mt-2";

                div.innerHTML = `
        <input type="text" name="videos[]" class="form-control" placeholder="YouTube URL">
        <button type="button" class="btn btn-danger btn-sm ml-2" onclick="this.parentElement.remove()">X</button>
    `;

                document.getElementById("videoArea").appendChild(div);
            }
        </script>


        <!-- <script>
function addVideo() {
    const div = document.createElement("div");
    div.className = "d-flex mt-2";

    div.innerHTML = `
        <input type="text" name="videos[]" class="form-control" placeholder="YouTube URL">
        <button type="button" class="btn btn-danger btn-sm ml-2" onclick="this.parentElement.remove()">X</button>
    `;

    document.getElementById("videoArea").appendChild(div);
}
</script> -->



        <div class="margin-top:50px">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>

            <a href="{{ route('care.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div> <!-- row end -->




</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const category = document.getElementById("pageCategory");
        const subCategory = document.getElementById("pageSubCategory");

        const oldSubCategory = "{{ old('pagesubcategory', $service->pagesubcategory ?? '') }}";

        function updateSubCategories() {
            subCategory.innerHTML = '<option value="">Select Sub Category</option>';

            if (category.value === "services") {
                addOption("services", "services");
                addOption("Product rentals", "Product rentals");
                addOption("Breast Pumps", "Breast Pumps");
                addOption("Hospital Beds", "Hospital Beds");
                addOption("Online Shopping", "Online Shopping");
                addOption("In-Store Shopping", "In-Store Shopping");
                addOption("productrentals", "productrentals");
                addOption("Online & In-Store Shipping Options", "Online & In-Store Shipping Options");
                addOption("Compression Services", "Compression Services");
                addOption("Professional Fittings", "Professional Fittings");
            }

            if (category.value === "products") {
                addOption("latest products", "latest products");
                addOption("upcomming products", "upcomming products");
                addOption("Product rentals", "Product rentals");
                addOption("Online Shopping", "Online Shopping");
                addOption("In-Store Shopping", "In-Store Shopping");
            }

            if (category.value === "productrentals") {
                addOption("Breast Pumps", "Breast Pumps");
                addOption("Hospital Beds", "Hospital Beds");
            }




            if (oldSubCategory) {
                subCategory.value = oldSubCategory;
            }
        }

        function addOption(value, text) {
            const option = document.createElement("option");
            option.value = value;
            option.text = text;
            subCategory.appendChild(option);
        }

        category.addEventListener("change", updateSubCategories);

        // Trigger on page load (edit form)
        updateSubCategories();
    });
</script>