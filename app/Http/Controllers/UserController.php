<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        return view('dashboard', compact('user'));
    }

    public function update(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);

        $user = auth()->user();
        // dd($user);
        // dd($request->all());

        User::where('id', $user->id)
            ->update(['name' => $request->name]);

            User::where('id', $user->id)
            ->update(['email' => $request->email]);

        if ($request->password != null){
            User::where('id', $user->id)
            ->update(['password' => $request->password]);
        }
        
        return view('dashboard', compact('user'));
    }
}
