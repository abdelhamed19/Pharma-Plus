<?php

namespace App\Http\Controllers\web\owners;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Owners\OwnerLogin;

class OwnerAuthController extends Controller
{
    public function login(OwnerLogin $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('owner')->attempt($credentials)) {
            return redirect()->route('owner.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid Credentials']);
    }
    public function logout()
    {
        auth()->guard('owner')->logout();
        return redirect()->route('owner.login');
    }
}
