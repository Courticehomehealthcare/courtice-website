<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Notifications\VerifyEmailNotification;
class AuthController extends Controller
{
    // Show public user login page
    public function showLogin()
    {
        return view('pages.login');
    }
    // Handle public user login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('products');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    // Handle user registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
        ]);
        // Send verification email
        $user->notify(new VerifyEmailNotification($user));
        return redirect()->route('login')->with('success', 'Registration successful! Please check your email to verify your account.');
    }
    // Verify email
    public function verifyEmail(Request $request)
    {
        $user = User::find($request->id);
        
        if (!$user) {
            return redirect()->route('login')->withErrors(['email' => 'Invalid verification link.']);
        }
        
        if (sha1($user->email) !== $request->hash) {
            return redirect()->route('login')->withErrors(['email' => 'Invalid verification link.']);
        }
        
        if ($user->email_verified_at !== null) {
            return redirect()->route('login')->with('success', 'Email already verified! Please login.');
        }
        
        $user->update(['email_verified_at' => now()]);
        
        Auth::login($user);
        return redirect('/')->with('success', 'Email verified successfully! Welcome to Courtice Home Healthcare.');
    }
    // Show Care Admin Login Page
    public function showCareLogin()
    {
        return view('pages.care-login');
    }
    // Handle Care Admin Login
    public function careLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('care/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
