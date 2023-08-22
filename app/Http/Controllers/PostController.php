<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\PostView;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
        ->where('active', '=', true)
        ->whereDate('publish_at', '<=', Carbon::now())
        ->orderBy('publish_at', 'desc')
        ->get();
        return view('post.index', compact('posts'));
    }

    public function show($id, Request $request)
    {
        $post = Post::query()
        ->where('active', '=', true)
        ->where('id', '=', $id)
        ->whereDate('publish_at', '<=', Carbon::now())
        ->limit(1)
        ->first();

        if(!$post){
            return redirect('/');
        }

        if( ! $request->cookie('considered')) {
            PostView::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'user_host' => $request->getHost(),
                'post_id' => $post->id,
            ]);
        }

        return response(view('post.show', compact('post')))->withCookie('considered', 'true', 60);
    }
}
