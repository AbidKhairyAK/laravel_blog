@extends('layouts.main')

@section('content')

<!-- Main -->
<div id="home" class="container">

	<!-- Content -->
	<div id="content" class="col-md-8">
		@if(! $posts->count())
			<div class="alert alert-warning">Nothing Found!</div>
		@else

			@if(isset($categoryName))
				<div class="alert alert-info">Category : <strong>{{ $categoryName }}</strong></div>
			@endif

			@if(isset($authorName))
				<div class="alert alert-info">Author : <strong>{{ $authorName }}</strong></div>
			@endif

			@foreach($posts as $post)
	      <div class="thumbnail">
	        <a href="{{ route('blog.post', $post->slug) }}">

	        	@if($post->image_url)
	          	<img src="{{ $post->image_url }}" alt="{{ $post->image }}" class="img-responsive">
	          @endif
	          
	          <div class="caption">
	          	<h2>{{ $post->title }}</h2>
	            <p class="text-justify">{!! $post->excerpt !!}</p>
	          </div>
	        </a>
	        <div class="panel panel-default">
	          <ul class="panel-body list-inline">
	          	<li><i class="fa fa-user"></i><a class="text-muted" href="{{ route('author', $post->author->slug) }}"> {{ $post->author->name }}</a></li>
	          	<li><i class="fa fa-clock-o"></i> {{ $post->date }}</li>
	          	<li><i class="fa fa-tags"></i><a href="{{ route('category', $post->category->slug) }}" class="text-muted"> {{ $post->category->title }}</a></li>
	          	<li><i class="fa fa-comments"></i><a class="text-muted"> 4 Comments</a></li>
	          	<li class="pull-right text-muted"><a href="{{ route('blog.post', $post->slug) }}" target="_blank">Continue Reading &raquo;</a></li>
	          </ul>
	        </div>
	      </div>
	    @endforeach
	  @endif

	  <!-- Pager -->
	  <ul class="pager">
	    {{ $posts->links() }}
	  </ul>

	</div><!-- Content Closer -->

	@include('layouts.sidebar')

</div>

@endsection