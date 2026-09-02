<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->orderByDesc('created_at')->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categoriename' => 'required|string|max:255|unique:categories',
            'slug' => 'nullable|string|max:255|unique:categories',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = time() . '_category_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/categories'), $imagePath);
        }

        Category::create([
            'categoriename' => $request->categoriename,
            'slug' => $request->slug ?: Str::slug($request->categoriename),
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status ?? 1,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
        ]);

        return redirect()->route('care.categories.index')
            ->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'categoriename' => 'required|string|max:255|unique:categories,categoriename,' . $category->id,
            'slug' => 'nullable|string|max:255|unique:categories,slug,' . $category->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['categoriename', 'slug', 'description', 'status', 'seo_title', 'seo_description', 'seo_keywords']);
        
        if (!$request->slug) {
            $data['slug'] = Str::slug($request->categoriename);
        }

        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
                unlink(public_path('uploads/categories/' . $category->image));
            }
            $imagePath = time() . '_category_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/categories'), $imagePath);
            $data['image'] = $imagePath;
        }

        $category->update($data);

        return redirect()->route('care.categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
            unlink(public_path('uploads/categories/' . $category->image));
        }

        $category->delete();

        return redirect()->route('care.categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
