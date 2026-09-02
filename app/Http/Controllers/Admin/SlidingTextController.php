<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlidingText;
use Illuminate\Http\Request;

class SlidingTextController extends Controller
{
    public function index()
    {
        $slidingTexts = SlidingText::orderBy('sort_order')->paginate(15);
        return view('admin.sliding_texts.index', compact('slidingTexts'));
    }

    public function create()
    {
        return view('admin.sliding_texts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        SlidingText::create([
            'text' => $request->text,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('care.sliding-texts.index')
            ->with('success', 'Sliding text created successfully.');
    }

    public function edit(SlidingText $slidingText)
    {
        return view('admin.sliding_texts.edit', compact('slidingText'));
    }

    public function update(Request $request, SlidingText $slidingText)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $slidingText->update([
            'text' => $request->text,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('care.sliding-texts.index')
            ->with('success', 'Sliding text updated successfully.');
    }

    public function destroy(SlidingText $slidingText)
    {
        $slidingText->delete();
        return redirect()->route('care.sliding-texts.index')
            ->with('success', 'Sliding text deleted successfully.');
    }
}
