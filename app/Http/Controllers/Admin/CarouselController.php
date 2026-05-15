<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::orderByDesc('id')->paginate(15);
        return view('admin.carousel.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.create');
    }

    public function store(Request $request)
    {
        \Log::info('Carousel Store Attempt:', [
            'has_image' => $request->hasFile('image'),
            'image_error' => $request->hasFile('image') ? $request->file('image')->getError() : 'N/A',
            'image_size' => $request->hasFile('image') ? $request->file('image')->getSize() : 'N/A',
            'data' => $request->except('image')
        ]);

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'button_text' => 'required|string',
                'button_link' => 'required|url',
                'image' => 'required|image',
                'page' => 'required|string|in:home,services,aboutus',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput($request->except('cropped_image'));
        }

        if ($request->filled('cropped_image')) {
            $imageData = $request->input('cropped_image');
            $imageData = preg_replace('#^data:image/\w+;base64,#i', '', $imageData);
            $imageData = base64_decode($imageData);
            $imageName = time() . '.jpg';
            file_put_contents(public_path('uploads/' . $imageName), $imageData);
            $imagePath = 'uploads/' . $imageName;
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName;
        }

        Carousel::create([
            'title' => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image_url' => $imagePath,
            'page' => $request->page,
        ]);

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel item created successfully.');
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        \Log::info('Carousel Update Attempt ID ' . $carousel->id . ':', [
            'has_image' => $request->hasFile('image'),
            'image_error' => $request->hasFile('image') ? $request->file('image')->getError() : 'N/A',
            'image_size' => $request->hasFile('image') ? $request->file('image')->getSize() : 'N/A',
            'data' => $request->except('image')
        ]);

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'button_text' => 'required|string',
                'button_link' => 'required|url',
                'image' => 'nullable|image',
                'page' => 'required|string|in:home,services,aboutus',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput($request->except('cropped_image'));
        }

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'page' => $request->page,
        ];

        if ($request->filled('cropped_image')) {
            if ($carousel->image_url && file_exists(public_path($carousel->image_url))) {
                unlink(public_path($carousel->image_url));
            }

            $imageData = $request->input('cropped_image');
            $imageData = preg_replace('#^data:image/\w+;base64,#i', '', $imageData);
            $imageData = base64_decode($imageData);
            $imageName = time() . '.jpg';
            file_put_contents(public_path('uploads/' . $imageName), $imageData);
            $data['image_url'] = 'uploads/' . $imageName;
        } elseif ($request->hasFile('image')) {
            if ($carousel->image_url && file_exists(public_path($carousel->image_url))) {
                unlink(public_path($carousel->image_url));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);

            $data['image_url'] = 'uploads/' . $imageName;
        }

        $carousel->update($data);

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel updated successfully.');
    }

    public function destroy(Carousel $carousel)
    {
        if ($carousel->image_url && file_exists(public_path($carousel->image_url))) {
            unlink(public_path($carousel->image_url));
        }

        $carousel->delete();

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel deleted successfully.');
    }
}
