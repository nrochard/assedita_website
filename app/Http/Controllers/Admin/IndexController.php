<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {

        $users = User::take(5)->orderBy('id', 'desc')->get();
        return view('admin/dashboard', compact('users'));
    }
}
