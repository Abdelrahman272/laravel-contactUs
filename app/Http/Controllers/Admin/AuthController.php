<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($user) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with(['error' => 'メールまたはパスワードに誤りがあります。']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
