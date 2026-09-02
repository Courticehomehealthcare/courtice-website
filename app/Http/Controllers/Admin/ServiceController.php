<?php

namespace App\Http\Controllers\Admin;
use App\Models\ServiceVideo;
use App\Models\ServiceGallery;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderByDesc('created_at')->paginate(15);
        return view('admin.services.index', compact('services'));
    }


    public function getAllServices()
    {
        // Get all active services under 'services' category
        $services = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderBy('ServicesTitle')
            ->get();

        return view('services.services', compact('services'));
    }




    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        /* ================= VALIDATION ================= */
        $request->validate([
            'ServicesTitle' => 'required|string|max:60',
            'ServicesText' => 'required|string',
            'pagecategory' => 'required|string',

            // Videos
            'videos.*' => 'nullable|url', // youtube urls
            'upload_videos.*' => 'nullable|mimes:mp4,mov,avi,webm|max:51200', // 50MB
        ]);

        /* ================= SERVICE IMAGE ================= */
        $serviceimage = null;
        if ($request->hasFile('serviceimage')) {
            $serviceimage = time() . '_service_' . $request->serviceimage->getClientOriginalName();
            $request->serviceimage->move(public_path('uploads/services'), $serviceimage);
        }

        /* ================= ICON ================= */
        $icon = null;
        if ($request->hasFile('icon')) {
            $icon = time() . '_icon_' . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('uploads/services/icons'), $icon);
        }

        /* ================= SEO IMAGE ================= */
        $seoImage = null;
        if ($request->hasFile('seo_image')) {
            $seoImage = time() . '_seo_' . $request->seo_image->getClientOriginalName();
            $request->seo_image->move(public_path('uploads/services'), $seoImage);
        }

        /* ================= OG IMAGE ================= */
        $ogImage = null;
        if ($request->hasFile('og_image')) {
            $ogImage = time() . '_og_' . $request->og_image->getClientOriginalName();
            $request->og_image->move(public_path('uploads/services'), $ogImage);
        }

        /* ================= TWITTER IMAGE ================= */
        $twitterImage = null;
        if ($request->hasFile('twitter_image')) {
            $twitterImage = time() . '_twitter_' . $request->twitter_image->getClientOriginalName();
            $request->twitter_image->move(public_path('uploads/services'), $twitterImage);
        }

        /* ================= CREATE SERVICE ================= */
        $service = Service::create([
            'bannervideourl' => $request->bannervideourl,
            'youtubevideo' => $request->youtubevideo,
            'bannertitle' => $request->bannertitle,
            'pagecategory' => $request->pagecategory,
            'pagesubcategory' => $request->pagesubcategory,
            'serviceuid' => $request->serviceuid ?: Str::random(12),
            'ServicesTitle' => $request->ServicesTitle,
            'ServicesText' => $request->ServicesText,
            'servicesUrl' => $request->servicesUrl ?: Str::slug($request->ServicesTitle),
            'other' => $request->other ?? '',
            'servicesdate' => $request->servicesdate ?? now()->toDateString(),
            'navbartext' => $request->navbartext ?? $request->ServicesTitle,
            'serviceimage' => $serviceimage,
            'icon' => $icon,
            'status' => $request->status ?? 1,

            // SEO
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'seo_image' => $seoImage,
            'canonical_url' => $request->canonical_url,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_image' => $ogImage,
            'twitter_title' => $request->twitter_title,
            'twitter_description' => $request->twitter_description,
            'twitter_image' => $twitterImage,
        ]);

        /* ================= YOUTUBE VIDEOS ================= */
        if ($request->videos) {
            foreach ($request->videos as $video) {
                if ($video) {
                    ServiceVideo::create([
                        'Serviceid' => $service->Serviceid,
                        'video_type' => 'youtube',
                        'youtube_url' => $video,
                        'video_file' => null,
                    ]);
                }
            }
        }

        /* ================= UPLOADED VIDEOS ================= */
        if ($request->hasFile('upload_videos')) {
            foreach ($request->file('upload_videos') as $video) {

                $videoName = time() . '_video_' . $video->getClientOriginalName();
                $video->move(public_path('uploads/services/videos'), $videoName);

                ServiceVideo::create([
                    'Serviceid' => $service->Serviceid,
                    'video_type' => 'upload',
                    'video_file' => $videoName,
                    'youtube_url' => null,
                ]);
            }
        }

        /* ================= GALLERY ================= */
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $img) {

                $name = time() . '_gallery_' . $img->getClientOriginalName();
                $img->move(public_path('uploads/services/gallery'), $name);

                ServiceGallery::create([
                    'Serviceid' => $service->Serviceid,
                    'image' => $name,
                ]);
            }
        }

        return redirect()->route('care.services.index')
            ->with('success', 'Service created successfully');
    }




    public function edit(Service $service)
    {
        $service->load(['videos', 'galleries']);   // 👈 load child tables

        return view('admin.services.edit', compact('service'));
    }

    //     public function edit(Service $service)
// {
//     $service->load(['videos','galleries']);   // 👈 load child tables
//     return view('admin.services.edit', compact('service'));
// }


    public function update(Request $request, Service $service)
    {
        /* ================= VALIDATION ================= */
        $request->validate([
            'ServicesTitle' => 'required|string|max:60',
            'ServicesText' => 'required|string',
            'pagecategory' => 'required|string',

            // Videos
            'videos.*' => 'nullable|url', // youtube urls
            'upload_videos.*' => 'nullable|mimes:mp4,mov,avi,webm|max:51200', // 50MB
        ]);

        /* ================= BASIC DATA ================= */
        $data = $request->only([
            'bannervideourl',
            'youtubevideo',
            'bannertitle',
            'pagecategory',
            'pagesubcategory',
            'ServicesTitle',
            'ServicesText',
            'servicesUrl',
            'other',
            'servicesdate',
            'navbartext',
            'status',
            'seo_title',
            'seo_description',
            'seo_keywords',
            'canonical_url',
            'og_title',
            'og_description',
            'twitter_title',
            'twitter_description'
        ]);

        /* ========== SERVICE IMAGE ========== */
        if ($request->hasFile('serviceimage')) {
            if ($service->serviceimage && file_exists(public_path('uploads/services/' . $service->serviceimage))) {
                unlink(public_path('uploads/services/' . $service->serviceimage));
            }
            $name = time() . '_service_' . $request->serviceimage->getClientOriginalName();
            $request->serviceimage->move(public_path('uploads/services'), $name);
            $data['serviceimage'] = $name;
        }

        /* ========== ICON ========== */
        if ($request->hasFile('icon')) {
            if ($service->icon && file_exists(public_path('uploads/services/icons/' . $service->icon))) {
                unlink(public_path('uploads/services/icons/' . $service->icon));
            }
            $name = time() . '_icon_' . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('uploads/services/icons'), $name);
            $data['icon'] = $name;
        }

        /* ========== SEO / OG / TWITTER IMAGES ========== */
        foreach (['seo_image', 'og_image', 'twitter_image'] as $img) {
            if ($request->hasFile($img)) {
                if ($service->$img && file_exists(public_path('uploads/services/' . $service->$img))) {
                    unlink(public_path('uploads/services/' . $service->$img));
                }
                $name = time() . '_' . $img . '_' . $request->$img->getClientOriginalName();
                $request->$img->move(public_path('uploads/services'), $name);
                $data[$img] = $name;
            }
        }

        /* ========== UPDATE SERVICE ========== */
        $service->update($data);

        /* ========== UPDATE VIDEOS (YOUTUBE + UPLOAD) ========== */
        if ($request->videos || $request->hasFile('upload_videos')) {

            // delete old videos & files
            foreach ($service->videos as $v) {
                if ($v->video_type === 'upload' && $v->video_file) {
                    $path = public_path('uploads/services/videos/' . $v->video_file);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
                // $v->delete();
            }

            // YouTube videos
            if ($request->videos) {
                foreach ($request->videos as $video) {
                    if ($video) {
                        ServiceVideo::create([
                            'Serviceid' => $service->Serviceid,
                            'video_type' => 'youtube',
                            'youtube_url' => $video,
                            'video_file' => null,
                        ]);
                    }
                }
            }

            // Uploaded videos
            if ($request->hasFile('upload_videos')) {
                foreach ($request->file('upload_videos') as $video) {

                    $videoName = time() . '_video_' . $video->getClientOriginalName();
                    $video->move(public_path('uploads/services/videos'), $videoName);

                    ServiceVideo::create([
                        'Serviceid' => $service->Serviceid,
                        'video_type' => 'upload',
                        'video_file' => $videoName,
                        'youtube_url' => null,
                    ]);
                }
            }
        }

        /* ========== UPDATE GALLERY ========== */
        if ($request->hasFile('gallery')) {

            foreach ($service->galleries as $g) {
                $path = public_path('uploads/services/gallery/' . $g->image);
                if (file_exists($path)) {
                    unlink($path);
                }
                $g->delete();
            }

            foreach ($request->file('gallery') as $img) {
                $name = time() . '_gallery_' . $img->getClientOriginalName();
                $img->move(public_path('uploads/services/gallery'), $name);

                ServiceGallery::create([
                    'Serviceid' => $service->Serviceid,
                    'image' => $name,
                ]);
            }
        }

        return redirect()->route('care.services.index')
            ->with('success', 'Service updated successfully');
    }



    public function destroy(Service $service)
    {
        // delete images on delete
        if ($service->serviceimage && file_exists(public_path('uploads/services/' . $service->serviceimage))) {
            unlink(public_path('uploads/services/' . $service->serviceimage));
        }

        if ($service->icon && file_exists(public_path('uploads/services/icons/' . $service->icon))) {
            unlink(public_path('uploads/services/icons/' . $service->icon));
        }

        $service->delete();

        return redirect()->route('care.services.index')
            ->with('success', 'Service deleted successfully.');
    }

    // public function serviceDetails($slug)
    // {
    //     $service = Service::where('servicesUrl', $slug)
    //         ->where('status', 1)
    //         ->firstOrFail();

    //     return view('services.details', compact('service'));
    // }


    public function deleteVideo($id)
    {
        ServiceVideo::where('id', $id)->delete();
        return back()->with('success', 'Video deleted');
    }

    public function deleteGallery($id)
    {
        $g = ServiceGallery::findOrFail($id);

        if (file_exists(public_path('uploads/services/gallery/' . $g->image))) {
            unlink(public_path('uploads/services/gallery/' . $g->image));
        }

        $g->delete();
        return back()->with('success', 'Image deleted');
    }

    public function serviceDetails($slug)
    {
        // Load service + its videos + its gallery
        $service = Service::with(['videos', 'galleries'])
            ->where('servicesUrl', $slug)
            ->where('status', 1)
            ->firstOrFail();

        // Sidebar services
        $allServices = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderBy('ServicesTitle')
            ->get();

        return view('services.details', compact('service', 'allServices'));
    }



}
