<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:6|unique:users',
            'password' => 'required|min:3|same:repeat_password'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();
        $validated['password'] = Hash::make($validated['password']);

        $user = User::query()->create($validated);

        Auth::login($user);

        return redirect()->route('auth');
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        if (!Auth::attempt($validator->validated())) {
            return back()->withErrors(['invalid' => 'Invalid credentails'])->withInput($request->all());
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

}
