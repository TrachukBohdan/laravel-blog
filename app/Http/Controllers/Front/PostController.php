<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    /**
     * show the certain post
     * @param $postId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPost($postId)
    {
        $post = Post::findOrFail($postId);
        return view('front.pages.post.post', compact('post'));
    }


}
