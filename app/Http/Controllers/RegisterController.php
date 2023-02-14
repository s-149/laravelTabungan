<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        // request()->all();
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        return redirect('/login');
    }
}
