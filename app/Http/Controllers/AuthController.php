<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //     public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {

    //         $request->session()->regenerate();

    //         return redirect()->route('admin.dashboard');
//     }

    //     return back()->withErrors(['email' => 'Invalid credentials']);
// }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::guard('admin')->attempt($credentials, $remember)) {

            // ✅ SAVE SESSION
            session([
                'admin_logged_in' => true,
                'admin_role' => auth('admin')->user()->role
            ]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }


    //     public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {

    //         $request->session()->regenerate();

    //         \Log::info('Login successful', [
//             'email' => $request->email,
//             'role'  => auth('admin')->user()->role
//         ]);

    //         return response()->json([
//             'status' => true,
//             'redirect' => route('admin.dashboard')
//         ]);
//     }

    //     return response()->json([
//         'status' => false,
//         'message' => 'Invalid credentials'
//     ], 401);
// }
//     public function login(Request $request)
// {
//     $email = $request->email;
//     $ip = $request->ip();
//     $userAgent = $request->userAgent();

    //     try {
//         // 1️⃣ Validate input
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);

    //         // 2️⃣ Find user
//         $user = Adminiy::where('email', $email)->first();

    //         if (!$user) {
//             Log::warning("Login failed: User not found", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'User not found'])->withInput();
//         }

    //         if ($user->is_active != '1') {
//             Log::warning("Login failed: User inactive", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'User account inactive'])->withInput();
//         }

    //         if (!Hash::check($request->password, $user->password)) {
//             Log::warning("Login failed: Invalid password", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
//         }

    //         // 3️⃣ Successful login
//         auth()->login($user, $request->has('remember'));
//         $request->session()->regenerate(); // ✅ important to prevent session issues

    //         Log::info("Login successful", [
//             'email' => $email,
//             'ip' => $ip,
//             'user_agent' => $userAgent,
//             'role' => $user->role
//         ]);

    //         // 4️⃣ Redirect based on role
//         if ($user->role === 'admin') {
//             Log::info("Redirecting admin to dashboard", [
//                 'email' => $email,
//                 'role' => $user->role,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully');
//         }

    //         Log::info("Redirecting normal user to home", [
//             'email' => $email,
//             'role' => $user->role,
//             'ip' => $ip,
//             'user_agent' => $userAgent
//         ]);

    //         return redirect()->route('home')->with('success', 'Logged in successfully');

    //     } catch (\Throwable $th) {
//         Log::error("Login error: ".$th->getMessage(), [
//             'email' => $email,
//             'ip' => $ip,
//             'user_agent' => $userAgent
//         ]);

    //         return back()->withErrors(['error' => $th->getMessage()]);
//     }
// }
//     public function login(Request $request)
// {
//     $email = $request->email;
//     $ip = $request->ip();
//     $userAgent = $request->userAgent();

    //     try {
//         // Validate input
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);

    //         $user = Adminiy::where('email', $email)->first();

    //         if (!$user) {
//             Log::warning("Login failed: User not found", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'User not found'])->withInput();
//         }

    //         if ($user->is_active != '1') {
//             Log::warning("Login failed: User inactive", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'User account inactive'])->withInput();
//         }

    //         if (!Hash::check($request->password, $user->password)) {
//             Log::warning("Login failed: Invalid password", [
//                 'email' => $email,
//                 'ip' => $ip,
//                 'user_agent' => $userAgent
//             ]);

    //             return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
//         }

    //         // Successful login
//         auth()->login($user, $request->has('remember'));

    //         Log::info("Login successful", [
//             'email' => $email,
//             'ip' => $ip,
//             'user_agent' => $userAgent,
//             'role' => $user->role
//         ]);

    //         // Redirect based on role
//       if ($user->role === 'admin') {
//     Log::info("Redirecting admin to dashboard", [
//         'email' => $user->email,
//         'role' => $user->role,
//         'ip' => $request->ip(),
//         'user_agent' => $request->userAgent(),
//     ]);

    //     return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully');
// }


    //         return redirect('/home')->with('success', 'Logged in successfully');

    //     } catch (\Throwable $th) {
//         Log::error("Login error: ".$th->getMessage(), [
//             'email' => $email,
//             'ip' => $ip,
//             'user_agent' => $userAgent
//         ]);

    //         return back()->withErrors(['error' => $th->getMessage()]);
//     }
// }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $user = Adminiy::where('email', $request->email)->first();

    //     if (!$user) {
    //         return back()->withErrors(['email' => 'User not found'])->withInput();
    //     }

    //     if ($user->is_active != '1') {
    //         return back()->withErrors(['email' => 'User account inactive'])->withInput();
    //     }

    //     if (!Hash::check($request->password, $user->password)) {
    //         return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    //     }

    //     $remember = $request->has('remember'); 
    //     auth()->login($user, $remember); // Session login

    //     if ($user->role === 'admin') {
    //         return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully');
    //     }

    //     return redirect('/home')->with('success', 'Logged in successfully');
    // }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
