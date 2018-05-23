<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    protected $limit = 3;
				
    public function index()
    {
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title')->get();

    	// $posts = Post::with('author')->orderBy('created_at','desc')->get();
    	// $posts = Post::with('author')->latest()->get();
    	$posts = Post::with('author')
							->published()
							->latestFirst()
							->simplePaginate($this->limit);

    	return view('blog.index', compact('posts','categories'));
    }

    public function category($id)
    {
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title')->get();

        // $posts = Post::with('author')->orderBy('created_at','desc')->get();
        // $posts = Post::with('author')->latest()->get();
        $posts = Post::with('author')
                            ->published()
                            ->latestFirst()
                            ->where('category_id',$id)
                            ->simplePaginate($this->limit);
                            
        return view('blog.index', compact('posts','categories'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
