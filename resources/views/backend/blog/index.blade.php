@extends('layouts.backend.main')

@section('title','Labaru | Blog Index')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blog
      <small>Display all blog posts</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('blog.index') }}">Blog</a></li>
      <li class="active">All Posts</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

    	<!-- box-header -->
      <div class="box-header with-border">
        <a href="{{ route('blog.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->

      <!-- box-body -->
      <div class="box-body">
        @if (session('message'))
          <div class="alert alert-info">
            <strong>{{ session('message') }}</strong>
          </div>
        @endif

      	@if (! $posts->count())
	      	<div class="alert alert-danger">
	      		<strong>No record found.</strong>
	      	</div>
	      @else
	      	<table class="table table-bordered table-hover">
	      		<thead>
	      			<th width="80">Action</th>
	      			<th>Title</th>
	      			<th width="120">Author</th>
	      			<th width="150">Category</th>
	      			<th width="170">Date</th>
	      		</thead>
	      		<tbody>
	      			@foreach($posts as $post)
		      			<tr>
			      			<td>
			      				<a href="{{ route('blog.edit', $post->id) }}" class="btn btn-xs btn-default">
			      					<i class="fa fa-edit"></i>
			      				</a>
			      				<form style="display: inline;" method="post" action="{{ route('blog.destroy', $post->id) }}">
			      					{{ method_field('DELETE') }}
			      					<button type="submit" class="btn btn-xs btn-danger">
			      						<i class="fa fa-times"></i>
			      					</button>
			      				</form>
			      			</td>
			      			<td>{{ $post->title }}</td>
			      			<td>{{ $post->author->name }}</td>
			      			<td>{{ $post->category->title }}</td>
			      			<td>
			      				<abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | 
			      				{!! $post->publicationLabel() !!}
			      			</td>
			      		</tr>
	      			@endforeach
	      		</tbody>
	      	</table>
	      @endif
      </div>
      <!-- /.box-body -->

      <div class="box-footer clearfix">
      	<div class="pull-left">
	      	{{ $posts->render() }}
      	</div>
      	<div class="pull-right text-muted">
      		<small>{{ $postCount }} {{ str_plural('item', $postCount) }}</small>
      	</div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$('ul.pagination').addClass('pagination-sm no-margin')
	</script>
@endsection