@extends('layouts.main')

@section('content')

	<!-- Main -->
	<div id="home" class="container">

		<!-- Content -->
		<div id="post" class="col-md-8">

      <div class="thumbnail">

        @if ($post->imageUrl)
          <img src="{{ $post->imageUrl }}" alt="{{ $post->title }}" class="img-responsive">
        @endif
        
        <div class="caption">
        	<h2>{{ $post->title }}</h2>
        	<ul class="list-inline">
        		<li><i class="fa fa-user"></i> <span class="text-muted"> {{ $post->author->name }}</span></li>
        		<li><i class="fa fa-clock-o"></i> {{ $post->date }}</li>
        		<li><i class="fa fa-tags"></i> <span class="text-muted">Blog</span></li>
        		<li><i class="fa fa-comments"></i> <span class="text-muted">4 Comments</span></li>
        	</ul>
          <div class="text-justify"> 
            <p> {{ $post->body }} </p> 
          </div>
        </div>
      </div>

      <!-- Author -->
      <div id="author" class="panel panel-default">
      	<div class="panel-body">
      		<div class="media">
      		  <div class="media-left media-top">
      		  	<span>
      		    	<img src="/AbidBlog/img/Post_Image_2.jpg" class="media-object">
      		  	</span>
      		  </div>
      		  <div class="media-body">
      		    <h4 class="media-heading"> {{ $post->author->name }} </h4>
      		    <small class="text-muted"><i class="fa fa-newspaper-o"></i> 90 post</small>
      		    <p class="text-muted">
      		    	Duis molestie eros et sodales sollicitudin. Vestibulum ac mauris pharetra, sodales risus et, rutrum arcu. Quisque vel feugiat mauris. Proin congue mollis nibh non tempus. Duis faucibus, tortor sit amet auctor viverra, ipsum dui blandit tellus.
      		    </p>
      		  </div>
      		</div>
      	</div>
      </div>

      <!-- Comments Here -->

		</div><!-- Content Closer -->

		@include('layouts.sidebar')

	</div><!-- Main Closer -->

@endsection