@extends('layouts.main')

@section('content')

	<!-- Main -->
	<div id="home" class="container">

		<!-- Content -->
		<div id="content" class="col-md-8">

			@foreach($posts as $post)
			
	      <div class="thumbnail">
	        <a href="#" target="_blank">

	        	@if ($post->imageUrl)
	          	<img src="{{ $post->image_url }}" alt="Post Image" class="img-responsive">
	          @endif
	          
	          <div class="caption">
	          	<h2>{{ $post->title }}</h2>
	            <p class="text-justify">{{ $post->excerpt }}</p>
	          </div>
	        </a>
	        <div class="panel panel-default">
	          <ul class="panel-body list-inline">
	          	<li><i class="fa fa-user"></i> <span class="text-muted">Admin</span></li>
	          	<li><i class="fa fa-clock-o"></i> February, 12 2016</li>
	          	<li><i class="fa fa-tags"></i> <span class="text-muted">Blog</span></li>
	          	<li><i class="fa fa-comments"></i> <span class="text-muted">4 Comments</span></li>
	          	<li class="pull-right text-muted"><a href="#" target="_blank">Continue Reading &raquo;</a></li>
	          </ul>
	        </div>
	      </div>

      @endforeach

		  <!-- Pager -->
		  <ul class="pager">
		    <li class="previous"><a href="#">&larr; Newer</a></li>
		    <li class="next"><a href="#">Older &rarr;</a></li>
		  </ul>

		</div><!-- Content Closer -->

		@include('layouts.sidebar')

	</div><!-- Main Closer -->

@endsection