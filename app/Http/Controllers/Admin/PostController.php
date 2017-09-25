<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Services\ConfirmOperation\ConfirmOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Validation rules for the post
     * @var array
     */
    private $postValidationRules = [
        'title'     => 'required',
        'article'   => 'required'
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
        $posts = Post::paginate(config('blog.posts_per_page'));
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
            'article' => $request->article,
            'img' => $request->img
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
        $request->validate($this->postValidationRules);
        $post = Post::findOrFail($request->post_id);

        $post->update([
            'title' => $request->title,
            'article' => $request->article,
            'img' => $request->img
        ]);

        session()->flash('success', 'The post was updated successfully');

        return redirect('/admin/post/list');
    }

    /**
     * @param $postId
     * @param null $confirm
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deletePost($postId, $confirm = null)
    {
        $post = Post::findOrFail($postId);

        if(is_null($confirm))
        {
            session()->flash('confirm', new ConfirmOperation(
                'Deleting',
                'Do you really want to delete "' . $post->title . '"',
                url('/admin/post/delete', ['postId' => $post->id, 'confirm' => 1]),
                url('/admin/post/list')
            ));

            return back();
        }

        $post->delete();
        session()->flash('success', 'The post was deleted successfully');
        return redirect('/admin/post/list');
    }

}

