<?php

namespace App\Views\Composers;

use Illuminate\View\View;
use App\Category;
use App\Post;

class NavigationComposer
{
	public function compose(View $view)
	{
		$this->composeCategories($view);
		$this->composePopularPosts($view);
	}

	private function composeCategories(View $view)
	{
		$categories = Category::with(['posts' => function($query){
			$query->published();
    }])->orderBy('title')->get();

    $view->with('categories', $categories);
	}

	private function composePopularPosts(View $view)
	{
		$popularPosts = Post::published()->popular()->take(4)->get();
		$view->with('popularPosts', $popularPosts);
	}
}