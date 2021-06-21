<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request){

        $posts = DB::table('posts')->get();
        // dd($posts);
        return view('admin/posts', compact('posts'));
    }
}
