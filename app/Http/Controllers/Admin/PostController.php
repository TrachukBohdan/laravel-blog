<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function showAddPost()
    {
        return view('admin.pages.posts.add-post');
    }

    public function showEditPost()
    {
        return view('admin.pages.posts.edit-post');
    }

    public function showPostList()
    {
        return view('admin.pages.posts.post-list');
    }

    public function storePost()
    {

    }

    public function updatePost()
    {

    }

    public function deletePost()
    {

    }

}

