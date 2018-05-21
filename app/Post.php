<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function getImageUrlAttribute($value)
	{
		$imageUrl = "";

		if (! is_null($this->image))
		{
			$imagePath = public_path()."/AbidBlog/img/".$this->image;
			if (file_exists($imagePath)) $imageUrl = asset("AbidBlog/img/".$this->image);
		}

		return $imageUrl;
	}
}
