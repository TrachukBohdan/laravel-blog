<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * post list
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPostList()
    {
        $posts = Post::orderByNew()
            ->paginate(config('blog.posts_per_page'));

        return view('front.pages.index.index', compact('posts'));
    }

}
