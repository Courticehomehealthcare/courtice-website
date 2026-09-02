<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderByDesc('created_at')->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $mainImage = null;
        if ($request->hasFile('main_image')) {
            $mainImage = time() . '_product_' . $request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('uploads/products'), $mainImage);
        }

        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug ?: Str::slug($request->name),
            'price' => $request->price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'sku' => $request->sku,
            'main_image' => $mainImage,
            'status' => $request->status ?? 1,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imageName = time() . '_gallery_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/products/gallery'), $imageName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('care.products.index')
            ->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('status', 1)->get();
        $product->load('images');
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug,' . $product->id,
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['category_id', 'name', 'slug', 'price', 'short_description', 'description', 'sku', 'status', 'seo_title', 'seo_description', 'seo_keywords']);
        
        if (!$request->slug) {
            $data['slug'] = Str::slug($request->name);
        }

        if ($request->hasFile('main_image')) {
            if ($product->main_image && file_exists(public_path('uploads/products/' . $product->main_image))) {
                unlink(public_path('uploads/products/' . $product->main_image));
            }
            $mainImage = time() . '_product_' . $request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('uploads/products'), $mainImage);
            $data['main_image'] = $mainImage;
        }

        $product->update($data);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imageName = time() . '_gallery_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/products/gallery'), $imageName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('care.products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        if ($product->main_image && file_exists(public_path('uploads/products/' . $product->main_image))) {
            unlink(public_path('uploads/products/' . $product->main_image));
        }

        foreach ($product->images as $image) {
            if (file_exists(public_path('uploads/products/gallery/' . $image->image))) {
                unlink(public_path('uploads/products/gallery/' . $image->image));
            }
            $image->delete();
        }

        $product->delete();

        return redirect()->route('care.products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function deleteImage($id)
    {
        $image = ProductImage::findOrFail($id);
        if (file_exists(public_path('uploads/products/gallery/' . $image->image))) {
            unlink(public_path('uploads/products/gallery/' . $image->image));
        }
        $image->delete();
        return back()->with('success', 'Gallery image deleted');
    }
}
