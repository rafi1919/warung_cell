<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data_admin = User::all();
        return view('register', compact('data_admin'));
    }

    public function editadmin($id)
    {
        $data_edit = User::find($id);
        // dd($data_edit);

        return view('register', compact('data_edit'));
    }

    public function tambahadmin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/register')->with('success', 'Registrasi Berhasil!');
    }
}
