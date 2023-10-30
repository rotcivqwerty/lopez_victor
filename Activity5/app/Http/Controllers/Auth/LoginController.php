<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\account;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/dashboard'); // Redirect to the dashboard or another page
        }

        // Authentication failed
        return redirect()->route('/')->with('error', 'Invalid credentials');
    }
}


