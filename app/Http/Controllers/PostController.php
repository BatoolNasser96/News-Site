<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	protected $posts = [
		1 => [
			'id' => 1,
			'title' => 'Post 1',
			'content' => 'Post content...',
		],
		2 => [
			'id' => 2,
			'title' => 'Post 2',
			'content' => 'Post content...',
		],
		3 => [
			'id' => 3,
			'title' => 'Post 3',
			'content' => 'Post content...',
		],
	];

    //
    public function index()
    {
    	return view('posts.index')->with([
    		'posts' => $this->posts,
    		'title' => '<h2>Title</h2>',
    		//'test' => 10,
    	]);
    }

    public function view($id)
    {
    	if (!array_key_exists($id, $this->posts)) {
    		abort(404);
    	}

    	return view('posts.view', [
    		'post' => $this->posts[$id],
    	]);
    }
}

