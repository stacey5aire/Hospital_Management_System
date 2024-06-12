<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function verify_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::user()->usertype == 1) {

                $notification_data = DB::select('SELECT users.name, users.phone, notifications.type, notifications.data, notifications.created_at FROM `users` join `notifications` on users.id=notifications.notifiable_id where users.usertype !=1');
                // $request->set_session();
                // $_SESSION['notification'] = $notification_data;

                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.home');
            }
        }

        return redirect()->route('login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
