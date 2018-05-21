@extends('layouts.main')

@section('content')

	<!-- Main -->
	<div id="home" class="container">

		<!-- Content -->
		<div id="content" class="col-md-8">

      <div class="thumbnail">
        <img src="/AbidBlog/img/Post_Image_2.jpg" alt="Lights" class="img-responsive">
        <div class="caption">
        	<h2>Lorem ipsum donec id elit non donec id elit non mi porta</h2>
        	<ul class="list-inline">
        		<li><i class="fa fa-user"></i> <span class="text-muted">Admin</span></li>
        		<li><i class="fa fa-clock-o"></i> February, 12 2016</li>
        		<li><i class="fa fa-tags"></i> <span class="text-muted">Blog</span></li>
        		<li><i class="fa fa-comments"></i> <span class="text-muted">4 Comments</span></li>
        	</ul>
          <div class="text-justify">
          	<p>
          		Nam fringilla, augue sit amet fermentum egestas, tellus magna efficitur velit, ac laoreet metus tortor vel velit. Proin vestibulum iaculis finibus. Mauris in lobortis lorem, eget pharetra ante. Nullam rhoncus, orci id faucibus luctus, leo ligula venenatis ex, in tincidunt sapien ante sit amet massa. Quisque aliquet nisl justo, a tincidunt arcu molestie id. Maecenas quis mauris sit amet urna vulputate lacinia. Proin erat tellus, dignissim vel nisi non, egestas porta tellus. Duis consectetur feugiat felis, a posuere justo sollicitudin sit amet. Nullam vitae bibendum diam. Fusce nec finibus elit. Praesent at posuere est, quis gravida ex. Duis eu urna cursus, gravida tortor quis, tincidunt est. Vestibulum mauris urna, interdum non porttitor quis, scelerisque non quam. Aliquam tempor vel risus id dictum. Aliquam dapibus mi at elit facilisis accumsan.
          	</p>
          	<p>
          		Curabitur eget est risus. Morbi varius eros metus, vitae venenatis leo fermentum vitae. Phasellus efficitur ante ligula, at fringilla risus lobortis et. Quisque venenatis nisl quis est suscipit cursus. In scelerisque nulla eget turpis finibus ullamcorper id eu nibh. Nulla accumsan eu quam sed elementum. Integer vitae nisl posuere, consectetur ipsum sit amet, imperdiet nibh. Nunc ligula lacus, lacinia vitae varius eget, porta vitae quam. Nam ut mi eget odio consequat mattis et in nisi. Proin at sem sed massa molestie facilisis vel ac ipsum. Duis vitae eros feugiat, gravida lacus quis, hendrerit sem. Sed a arcu ut elit vestibulum accumsan in eu nulla. Pellentesque lorem elit, hendrerit ac egestas vel, tristique at nisi. Proin bibendum tortor dui, sed lacinia lectus pretium at.
          	</p>
          	<p>
          		Donec tempor, diam vel faucibus tempor, ex leo vulputate dui, nec molestie nisi nulla id libero. Vestibulum sollicitudin est at tristique tincidunt. Integer a accumsan tortor. Sed mollis euismod varius. Vestibulum magna sem, blandit ac luctus id, luctus non justo. Sed sit amet lorem hendrerit, rhoncus felis at, tincidunt tellus. Donec dignissim vitae nibh posuere venenatis. Vivamus tristique mattis pellentesque. Nullam at lorem venenatis, finibus magna in, gravida metus.
          	</p>
          	<p>
          		Suspendisse neque mi, suscipit sit amet vehicula nec, porttitor id mi. In elementum turpis eget magna rhoncus, et scelerisque metus hendrerit. Curabitur posuere velit id sem ultrices consequat. Sed tempus ex porttitor lorem pharetra lacinia. Duis vehicula purus at quam placerat, et vulputate erat blandit. Nam quis enim fringilla est ullamcorper consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices, ipsum at ornare pharetra, metus arcu molestie lorem, et efficitur turpis risus eget ipsum. Suspendisse auctor a ligula eu imperdiet.
          	</p>
          	<p>
          		Duis molestie eros et sodales sollicitudin. Vestibulum ac mauris pharetra, sodales risus et, rutrum arcu. Quisque vel feugiat mauris. Proin congue mollis nibh non tempus. Duis faucibus, tortor sit amet auctor viverra, ipsum dui blandit tellus, ac convallis ligula elit nec nisl. Curabitur fermentum fringilla ligula et molestie. Nam bibendum commodo turpis, pharetra facilisis elit pulvinar ut. Aenean at ligula ultrices ligula gravida dapibus at id arcu.
          	</p>
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
      		    <h4 class="media-heading">Abid Khairy</h4>
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