<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        $title = 'registrate';
        return view('user.create', compact('title'));
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'avatar' => 'nullable|image',
        ]);

        if($request->hasFile('avatar')){
            $folder = date('Y-m-d');
            $avatar = $request->file('avatar')->store("public/images/{$folder}");
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatar ?? null,
        ]);

        Auth::login($user);
        session()->flash('success', 'регистрация пройдена');

        return redirect()->route('home');

    }

    public function loginCreate(){
        $title = 'авторизация';
        return view('user.login.create', compact('title'));
    }

    public function loginStore(Request $request){
        
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'maymay');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.create');
    }


}
