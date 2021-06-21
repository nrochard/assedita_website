<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request){

        $users = DB::table('posts')->get();
        return view('admin/posts', compact('posts'));
    }
}
