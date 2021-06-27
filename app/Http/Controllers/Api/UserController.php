<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        return view('dashboard', compact('user'));
        return response()->json($user, 200);
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
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
        
        return response()->json(['message' =>'Les informations ont bien été mises à jour'], 200);
    }
}
