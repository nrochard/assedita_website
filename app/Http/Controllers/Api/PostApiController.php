<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PostApiController extends Controller
{
    public function index(Request $request){

        $posts = Post::get();

        return response()->json([$posts], 200);
    }
}
