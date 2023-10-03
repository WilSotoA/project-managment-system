<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function register()
    {
        return Inertia::render('Auth/Registration');
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function authUser(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/projects');
        }
    }
}
