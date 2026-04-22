<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::orderByDesc('Created_at')->paginate(15);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(ContactUs $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact message deleted.');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer',
        ]);

        ContactUs::whereIn('contactid', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => count($request->ids) . ' contact(s) deleted.']);
    }
}
