<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\WeeklyNewsletterMail;
use Illuminate\Support\Facades\Log;

class SubscriberController extends Controller
{
    // public function subscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|unique:subscribers,email',
    //     ]);

    //     Subscriber::create([
    //         'email' => $request->email,
    //     ]);

    //     return response()->json(['message' => 'Subscribed successfully.'], 200);
    // }
    /**
     * 🗑️ Unsubscribe a user.
     */
    // public function unsubscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:subscribers,email',
    //     ]);

    //     $subscriber = Subscriber::where('email', $request->email)->first();

    //     if (!$subscriber) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Subscriber not found.'
    //         ], 404);
    //     }

    //     $subscriber->delete();

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'You have been unsubscribed successfully.'
    //     ], 200);
    // }

    /**
     * 🧾 Get all subscribers (for admin panel).
     */
    // public function index()
    // {
    //     $subscribers = Subscriber::latest()->get();

    //     return response()->json([
    //         'status' => 'success',
    //         'count' => $subscribers->count(),
    //         'data' => $subscribers
    //     ], 200);
    // }

    /**
     * 💌 Send a newsletter manually (admin input).
     */
    // public function sendNewsletter(Request $request)
    // {
    //     $request->validate([
    //         'subject' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     $subscribers = Subscriber::all();

    //     if ($subscribers->isEmpty()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'No subscribers found to send newsletter.'
    //         ], 404);
    //     }

    //     foreach ($subscribers as $subscriber) {
    //         Mail::to($subscriber->email)
    //             ->queue(new WeeklyNewsletterMail($request->subject, $request->content));
    //     }

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Newsletter sent to ' . $subscribers->count() . ' subscribers.'
    //     ], 200);
    // }

    /**
     * 🚮 Delete all subscribers (optional admin function).
     */
    // public function clearAll()
    // {
    //     $count = Subscriber::count();
    //     Subscriber::truncate();

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => "$count subscribers removed successfully."
    //     ], 200);
    // }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check if email already exists
        $existing = Subscriber::where('email', $request->email)->first();

        if ($existing) {
            return response()->json([
                'message' => 'Email is already subscribed with us.'
            ], 200);
        }

        // Create subscriber
        Subscriber::create([
            'email' => $request->email,
        ]);

        try {
            Mail::to($request->email)->send(new \App\Mail\SubscriptionThankYou());
        } catch (\Exception $e) {
            Log::error("Failed to send subscription thank you email to {$request->email}: " . $e->getMessage());
        }

        return response()->json(['message' => 'Subscribed successfully.'], 200);
    }


    //     public function subscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|unique:subscribers,email',
    //     ]);

    //     Subscriber::create([
    //         'email' => $request->email,
    //     ]);

    //     return response()->json(['message' => 'Subscribed successfully.'], 200);
    // }

    // ✅ Unsubscribe existing email
    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        if (!$subscriber) {
            // Friendly message instead of default 404
            return response()->json([
                'message' => 'Your email has not subscribed with us.'
            ], 200); // Optional: 200 instead of 404
        }

        $subscriber->delete();

        return response()->json([
            'message' => 'Unsubscribed successfully.'
        ], 200);
    }

    // ✅ Get all subscribers (for admin view)
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        return view('admin.subscribers.index', compact('subscribers'));
    }

    // ✅ Clear all subscribers
    public function clearAll()
    {
        Subscriber::truncate();
        return redirect()->back()->with('success', 'All subscribers have been cleared.');
    }

    // ✅ Send newsletter (from Admin Panel)
    public function sendNewsletter(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'emails' => 'required|array',
            'emails.*' => 'email'
        ]);

        $emails = $request->emails;
        $content = $request->input('content');
        $subject = $request->input('subject');

        foreach ($emails as $email) {
            try {
                Mail::raw($content, function ($message) use ($email, $subject) {
                    $message->to($email)
                        ->subject($subject);
                });
            } catch (\Exception $e) {
                Log::error("Failed to send email to $email: " . $e->getMessage());
            }
        }

        return response()->json(['message' => 'Email sent successfully to selected subscribers.']);
    }
}
