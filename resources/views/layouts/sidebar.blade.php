		<!-- Sidebar -->
		<div id="sidebar" class="col-md-4">

			<!-- Search Bar 
			<form action="" method="">
			  <div class="input-group search">
			    <input type="text" class="form-control" placeholder="Search...">
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit">
			        <i class="glyphicon glyphicon-search"></i>
			      </button>
			    </div>
			  </div>
			</form>
			-->

			<!-- Category -->
			<div id="category" class="panel panel-default">
				<div class="panel-heading">CATEGORY</div>
				<div class="panel-body">
					<div class="list-group">

						@foreach($categories as $category)
					  	<a href="{{ route('category', $category->slug) }}" class="list-group-item">&rsaquo; {{ $category->title }} <span class="badge">{{ $category->posts->count() }}</span></a>
						@endforeach

					</div>
				</div>
			</div>

			<!-- Popular Post -->
			<div id="popular" class="panel panel-default">
				<div class="panel-heading">POPULAR POST</div>
				<div class="panel-body">
					<div class="list-group">

						@foreach($popularPosts as $post)
						  <a href="{{ $post->slug }}" class="list-group-item">
						  	<div class="media">

						  		@if ($post->image_thumb_url)
							  	  <div class="media-left media-top">
							  	    <img src="{{ $post->image_thumb_url }}" class="media-object">
							  	  </div>
						  	  @endif
						  	  
						  	  <div class="media-body">
						  	    <h4 class="media-heading">{{ $post->title }}</h4>
						  	    <p class="text-muted">{{ $post->date }}</p>
						  	  </div>
						  	</div>
						  </a>
						@endforeach
					</div>
				</div>
			</div><!-- Popular Post Closer -->

			<!-- Tags 
			<div id="tags" class="panel panel-default">
				<div class="panel-heading">TAGS</div>
				<div class="panel-body">
					<ul class="list-inline">
				    <li><a class="btn btn-default" href="#">Abid</a></li>
				    <li><a class="btn btn-default" href="#">Laravel</a></li>
				    <li><a class="btn btn-default" href="#">Bootstrap</a></li>
				    <li><a class="btn btn-default" href="#">HTML</a></li>
				    <li><a class="btn btn-default" href="#">CSS</a></li>
				    <li><a class="btn btn-default" href="#">PHP</a></li>
				    <li><a class="btn btn-default" href="#">Codeigniter</a></li>
				    <li><a class="btn btn-default" href="#">JQuery</a></li>
				  </ul>
				</div>
			</div>
			-->

		</div><!-- Sidebar Closer -->