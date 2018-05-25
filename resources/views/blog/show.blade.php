@extends('layouts.main')

@section('content')

  <?php $author = $post->author; ?>
  
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
        		<li><i class="fa fa-user"></i> <span class="text-muted"><a href="{{ route('author',$author->slug) }}"> {{ $author->name }}</a></span></li>
        		<li><i class="fa fa-clock-o"></i> {{ $post->date }}</li>
            <li><i class="fa fa-tags"></i> <span class="text-muted"><a href="{{ route('category',$post->category->slug) }}">{{ $post->category->title }}</a></span></li>
        		<li><i class="fa fa-comments"></i> <span class="text-muted">4 Comments</span></li>
        	</ul>
          <div class="text-justify"> 
            {!! $post->bodyHtml !!}
          </div>
        </div>
      </div>

      <!-- Author -->
      <div id="author" class="panel panel-default">
      	<div class="panel-body">
      		<div class="media">
      		  <div class="media-left media-top">
      		  	<span>
                <a href="{{ route('author',$author->slug) }}">
      		    	   <img src="{{ $author->gravatar() }}" alt="{{ $author->name }}" class="media-object">
                </a>
      		  	</span>
      		  </div>
      		  <div class="media-body">
      		    <h4 class="media-heading"><a href="{{ route('author',$author->slug) }}">{{ $author->name }}</a></h4>
      		    <small class="text-muted"><a href="{{ route('author',$author->slug) }}"><i class="fa fa-newspaper-o"></i> 
                <?php $postCount = $author->posts()->published()->count(); ?>
                {{ $postCount }} {{ str_plural('post', $postCount) }}
              </a></small>
      		    <div class="text-muted">{!! $author->bioHtml !!}</div>
      		  </div>
      		</div>
      	</div>
      </div>

      <!-- Comments Here -->

		</div><!-- Content Closer -->

		@include('layouts.sidebar')

	</div><!-- Main Closer -->

@endsection