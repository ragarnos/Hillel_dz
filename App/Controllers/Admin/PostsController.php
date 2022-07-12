<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Services\FileUploaderService;
use Core\View;

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
        Category::create([
            'title' => $_POST['name'],
            'description' => $_POST['description'],
        ]);

        redirect('admin/posts');
    }

    public function show(int $id)
    {

    }

    public function edit(int $id)
    {

    }

    public function update(int $id)
    {

    }

    public function destroy(int $id)
    {

    }
}
