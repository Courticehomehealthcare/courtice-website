<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeoPageController extends Controller
{
    public function index()
    {
        $seoPages = SeoPage::orderBy('page_label')->paginate(15);
        return view('admin.seo_pages.index', compact('seoPages'));
    }

    public function edit($id)
    {
        $seoPage = SeoPage::findOrFail($id);
        return view('admin.seo_pages.edit', compact('seoPage'));
    }

    public function update(Request $request, $id)
    {
        $seoPage = SeoPage::findOrFail($id);

        $request->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'canonical_url' => 'nullable|url|max:255',
        ]);

        $data = $request->only([
            'meta_title',
            'meta_description',
            'meta_keywords',
            'og_title',
            'og_description',
            'canonical_url',
        ]);

        // Handle OG image upload
        if ($request->hasFile('og_image')) {
            // Delete old image if exists
            if ($seoPage->og_image && file_exists(public_path($seoPage->og_image))) {
                @unlink(public_path($seoPage->og_image));
            }
            $file = $request->file('og_image');
            $filename = 'seo_og_' . $seoPage->page_key . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/seo'), $filename);
            $data['og_image'] = 'uploads/seo/' . $filename;
        }

        $seoPage->update($data);

        return redirect()->route('admin.seo.index')
            ->with('success', 'SEO settings for "' . $seoPage->page_label . '" updated successfully.');
    }
}
