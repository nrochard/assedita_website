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
    function displayForm(Request $request)
    {
        // dd("ok");
        return view('admin/post');
    }
    function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'isActive' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'path_img' => "",
            'isActive' => $request->isActive,
        ]);

        return redirect()->route('admin.post')->with('success', 'Article ajouté avec succès');
    }
    function editPost(Request $request){
        $post = Post::firstWhere('id', $request->id);
        return view('admin/editPost', compact('post'));
    }

    function updatePost(Request $request){

        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
        ]);
        
        $post = Post::firstWhere('id', $request->id);


        $post->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'isVisible' => $request->isVisible,
        ]);


        $posts = DB::table('posts')->get();

        return view('admin/posts', compact('posts'));
    }

}
