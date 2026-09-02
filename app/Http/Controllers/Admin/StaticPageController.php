<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaticPageController extends Controller
{
    public function index()
    {
        $pages = StaticPage::orderBy('title')->paginate(15);
        return view('admin.static_pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.static_pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:static_pages,slug',
            'content' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        StaticPage::create([
            'title' => $request->title,
            'slug' => $request->slug ?: Str::slug($request->title),
            'content' => $request->content,
            'is_active' => $request->is_active ?? true,
        ]);

        return redirect()->route('care.static-pages.index')->with('success', 'Page created successfully.');
    }

    public function edit(StaticPage $staticPage)
    {
        return view('admin.static_pages.edit', compact('staticPage'));
    }

    public function update(Request $request, StaticPage $staticPage)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:static_pages,slug,' . $staticPage->id,
            'content' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $staticPage->update([
            'title' => $request->title,
            'slug' => $request->slug ?: Str::slug($request->title),
            'content' => $request->content,
            'is_active' => $request->is_active ?? true,
        ]);

        return redirect()->route('care.static-pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(StaticPage $staticPage)
    {
        $staticPage->delete();
        return redirect()->route('care.static-pages.index')->with('success', 'Page deleted successfully.');
    }
}
