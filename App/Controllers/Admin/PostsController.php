<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Services\FileUploaderService;
use Core\View;
use DateTime;

class PostsController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        View::render('admin/posts/index', ['posts' => $posts]);
    }

    public function create()
    {
        View::render('admin/posts/create');
    }

    public function store()
    {
        Post::create([
            'title' => $_POST['email'],
            'body' => $_POST['description'],
        ]);
        header('Location: ' . SITE_URL . '/' . 'posts');
    }

    public function show(int $id)
    {

    }

    public function edit(int $id)
    {
        $post = Post::find($id);
        View::render('admin/posts/edit', ['post' => $post]);
    }

    public function update(int $id)
    {
        $post = Post::find($id);
        $postData = $_POST;
        $post->update($postData);
        header('Location: ' . SITE_URL . '/' . 'admin/posts');
    }

    public function destroy(int $id)
    {

    }
}
