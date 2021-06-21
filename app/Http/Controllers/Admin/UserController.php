<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){

        $users = DB::table('users')->get();
        return view('admin/users', compact('users'));
    }
    function deleteUser(Request $request)
    {
        $user = User::firstWhere('id', $request->id);

        if(isset($user))
        {
            $user->delete();
            $users = DB::table('users')->get();
            return redirect()->route('users')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('users')->with('error', 'Il y a eu un soucis lors de la suppression.');
        $users = DB::table('users')->get();
        return view('admin/users', compact('users'));
    }
}
