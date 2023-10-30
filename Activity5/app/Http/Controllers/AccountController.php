<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;

class AccountController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Create a new Account record
        $account = new Account;
        $account->name = $request->input('name');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
    
        $account->withoutTimestamps(function () use ($account) {
            $account->save();
        });
        return view('registerPage')->with('success', 'Registration successful');
    }
}
