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
    	// $posts = Post::with('author')->orderBy('created_at','desc')->get();
    	// $posts = Post::with('author')->latest()->get();
    	$posts = Post::with('author')
							->published()
							->latestFirst()
							->simplePaginate($this->limit);

    	return view('blog.index', compact('posts'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;

        // $posts = Post::with('author')->orderBy('created_at','desc')->get();
        // $posts = Post::with('author')->latest()->get();
        // $posts = Post::with('author')
        //                     ->published()
        //                     ->latestFirst()
        //                     ->where('category_id',$id)
        //                     ->simplePaginate($this->limit);

        $posts = $category->posts()
                            ->with('author')
                            ->published()
                            ->latestFirst()
                            ->simplePaginate($this->limit);
                            
        return view('blog.index', compact('posts', 'categoryName'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
