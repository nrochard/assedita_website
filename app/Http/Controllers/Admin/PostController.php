<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request){

        $posts = DB::table('posts')->get();
        // dd($posts);
        return view('admin/posts', compact('posts'));
    }
    function deletePost(Request $request)
    {
        $post = Post::firstWhere('id', $request->id);

        if(isset($post))
        {
            $post->delete();
            $posts = DB::table('posts')->get();
            return redirect()->route('admin.posts')->with('success', 'Article supprimé avec succès');
        }

        return redirect()->route('admin.posts')->with('error', 'Il y a eu un soucis lors de la suppression.');
        $posts = DB::table('posts')->get();
        return view('admin/posts', compact('posts'));
    }
}
