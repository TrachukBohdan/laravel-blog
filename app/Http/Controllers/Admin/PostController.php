<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private $postValidationRules = [
        'title' => 'required',
        'article' => 'required'
    ];

    /**
     * Add post page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAddPost()
    {
        return view('admin.pages.posts.add-post');
    }

    /**
     * Edit post page
     * @param $postId post id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditPost($postId)
    {
        $post = Post::findOrFail($postId);
        return view('admin.pages.posts.edit-post', compact('post'));
    }

    /**
     * List of posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPostList()
    {
        $posts = Post::all();
        return view('admin.pages.posts.post-list', compact('posts'));
    }

    /**
     * Store post to the DB
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storePost(Request $request)
    {
        $request->validate($this->postValidationRules);
        $user = Auth::user();

        $user->posts()->create([
            'title' => $request->title,
            'article' => $request->article
        ]);

        session()->flash('success', 'The post was added successfully');
        return redirect('/admin/post/list');
    }

    /**
     * Update post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updatePost(Request $request)
    {
        dd($request->all());
        return redirect('/admin/post/list');
    }

    public function deletePost($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        session()->flash('success', 'The post was deleted successfully');
        return redirect('/admin/post/list');
    }

}

