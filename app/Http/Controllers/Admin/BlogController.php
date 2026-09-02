<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('last_updated')->paginate(15);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 'published')
            ->where('visible', 1)
            ->orderByDesc('last_updated')
            ->get();

        return view('Blog.blog', compact('blogs')); // ✅ folder.blog
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('blogurl', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('blog.blog-details', compact('blog'));
        // make sure this file exists
    }

    public function showg($slug)
    {
        $blog = Blog::where('blogurl', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Log the access
        Log::info('Blog viewed', [
            'slug' => $slug,
            'blog_id' => $blog->id,
            'user_ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'time' => now(),
        ]);

        $latestBlogs = Blog::where('status', 'published')
            ->where('visible', 1)
            ->orderByDesc('last_updated')
            ->limit(5)
            ->get();

        return view('Blog.blog-details', compact('blog', 'latestBlogs'));
    }



    public function create()
    {
        return view('admin.blogs.create');
    }
    // use Illuminate\Support\Str;

    // public function store(Request $request)
// {
//     $request->validate([
//         'name'        => 'required|string|max:255',
//         'category'    => 'required|string|max:100',
//         'description' => 'required|string',
//         'image1'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//         'image2'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//     ]);

    //     $image1Path = null;
//     $image2Path = null;

    //     if ($request->hasFile('image1')) {
//         $image1Path = $request->file('image1')->store('blogs', 'public');
//     }

    //     if ($request->hasFile('image2')) {
//         $image2Path = $request->file('image2')->store('blogs', 'public');
//     }

    //     Blog::create([
//         'name'             => $request->name,
//         'category'         => $request->category,
//         'shortdescription' => $request->shortdescription,
//         'blogurl'          => $request->blogurl ?: Str::slug($request->name),
//         'last_updated'     => now(),
//         'image1'           => $image1Path,   // ✅ stored path
//         'image2'           => $image2Path,   // ✅ stored path
//         'description'      => $request->description,
//         'status'           => $request->status ?? 'draft',
//         'writtenby'        => $request->writtenby,
//         'visible'          => $request->visible ?? 1,
//     ]);

    //     return redirect()->route('care.blogs.index')
//         ->with('success', 'Blog created successfully.');
// }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'required|string',

            'image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // SEO validation
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:300',
            'seo_keywords' => 'nullable|string|max:500',
            'canonical_url' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:300',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string|max:300',
            'tags' => 'nullable|string',
            'last_updated' => 'required|date',
        ]);

        $image1Path = null;
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $image1Path = 'uploads/blogs/' . $filename;
        }

        $image2Path = null;
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $image2Path = 'uploads/blogs/' . $filename;
        }

        Blog::create([
            'name' => $request->name,
            'category' => $request->category,
            'shortdescription' => $request->shortdescription,
            'blogurl' => $request->blogurl ?: Str::slug($request->name),
            'last_updated' => $request->last_updated,
            'image1' => $image1Path,
            'image2' => $image2Path,
            'description' => $request->description,
            'status' => $request->status ?? 'draft',
            'writtenby' => $request->writtenby,
            'visible' => $request->visible ?? 1,
            'tags' => $request->tags,

            // SEO fields
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'seo_image' => $request->seo_image,
            'canonical_url' => $request->canonical_url,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_image' => $request->og_image,
            'twitter_title' => $request->twitter_title,
            'twitter_description' => $request->twitter_description,
            'twitter_image' => $request->twitter_image,
        ]);

        return redirect()->route('care.blogs.index')
            ->with('success', 'Blog created successfully.');
    }



    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    //     public function update(Request $request, Blog $blog)
// {
//     $request->validate([
//         'name'        => 'required|string|max:255',
//         'category'    => 'required|string|max:100',
//         'description' => 'required|string',
//         'image1'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//         'image2'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//     ]);

    //     // Keep old images by default
//     $image1Path = $blog->image1;
//     $image2Path = $blog->image2;

    //     // If new image1 uploaded → delete old → save new
//     if ($request->hasFile('image1')) {
//         if ($blog->image1 && Storage::disk('public')->exists($blog->image1)) {
//             Storage::disk('public')->delete($blog->image1);
//         }
//         $image1Path = $request->file('image1')->store('blogs', 'public');
//     }

    //     // If new image2 uploaded → delete old → save new
//     if ($request->hasFile('image2')) {
//         if ($blog->image2 && Storage::disk('public')->exists($blog->image2)) {
//             Storage::disk('public')->delete($blog->image2);
//         }
//         $image2Path = $request->file('image2')->store('blogs', 'public');
//     }

    //     $blog->update([
//         'name'             => $request->name,
//         'category'         => $request->category,
//         'shortdescription' => $request->shortdescription,
//         'blogurl'          => $request->blogurl ?: $blog->blogurl,
//         'last_updated'     => now(),
//         'image1'           => $image1Path,   // ✅ stored path
//         'image2'           => $image2Path,   // ✅ stored path
//         'description'      => $request->description,
//         'status'           => $request->status ?? $blog->status,
//         'writtenby'        => $request->writtenby,
//         'visible'          => $request->visible ?? $blog->visible,
//     ]);

    //     return redirect()->route('care.blogs.index')
//         ->with('success', 'Blog updated successfully.');
// }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'required|string',

            'image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // SEO validation
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:300',
            'seo_keywords' => 'nullable|string|max:500',
            'canonical_url' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:300',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string|max:300',
            'tags' => 'nullable|string',
            'last_updated' => 'required|date',
        ]);

        $image1Path = $blog->image1;
        $image2Path = $blog->image2;

        if ($request->hasFile('image1')) {
            if ($blog->image1 && file_exists(public_path($blog->image1))) {
                unlink(public_path($blog->image1));
            }
            $file = $request->file('image1');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $image1Path = 'uploads/blogs/' . $filename;
        }

        if ($request->hasFile('image2')) {
            if ($blog->image2 && file_exists(public_path($blog->image2))) {
                unlink(public_path($blog->image2));
            }
            $file = $request->file('image2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $image2Path = 'uploads/blogs/' . $filename;
        }

        $blog->update([
            'name' => $request->name,
            'category' => $request->category,
            'shortdescription' => $request->shortdescription,
            'blogurl' => $request->blogurl ?: $blog->blogurl,
            'last_updated' => $request->last_updated,
            'image1' => $image1Path,
            'image2' => $image2Path,
            'description' => $request->description,
            'status' => $request->status ?? $blog->status,
            'writtenby' => $request->writtenby,
            'visible' => $request->visible ?? $blog->visible,
            'tags' => $request->tags,

            // SEO fields
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'seo_image' => $request->seo_image,
            'canonical_url' => $request->canonical_url,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_image' => $request->og_image,
            'twitter_title' => $request->twitter_title,
            'twitter_description' => $request->twitter_description,
            'twitter_image' => $request->twitter_image,
        ]);

        return redirect()->route('care.blogs.index')
            ->with('success', 'Blog updated successfully.');
    }



    public function destroy(Blog $blog)
    {
        // Delete images from public/uploads/blogs if they exist
        if ($blog->image1 && file_exists(public_path($blog->image1))) {
            unlink(public_path($blog->image1));
        }
        if ($blog->image2 && file_exists(public_path($blog->image2))) {
            unlink(public_path($blog->image2));
        }

        $blog->delete();
        return redirect()->route('care.blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }
}
