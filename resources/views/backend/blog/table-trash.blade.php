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
          {!! Form::open(['style' => 'display: inline-block;', 'method' => 'PUT', 'route' => ['blog.restore', $post->id]]) !!}
    				<button title="Restore" class="btn btn-xs btn-default">
    					<i class="fa fa-refresh"></i>
    				</button>
    			{!! Form::close() !!}
          {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => ['blog.force-destroy', $post->id]]) !!}
  					<button title="Delete Permanent" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" type="submit" class="btn btn-xs btn-danger">
  						<i class="fa fa-times"></i>
  					</button>
  				{!! Form::close() !!}
  			</td>
  			<td>{{ $post->title }}</td>
  			<td>{{ $post->author->name }}</td>
  			<td>{{ $post->category->title }}</td>
  			<td>
  				<abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
  			</td>
  		</tr>
		@endforeach
	</tbody>
</table>