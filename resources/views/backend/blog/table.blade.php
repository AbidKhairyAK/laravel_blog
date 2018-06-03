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
          {!! Form::open(['method' => 'DELETE', 'route' => ['blog.destroy', $post->id]]) !!}
    				<a href="{{ route('blog.edit', $post->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>
  					<button type="submit" class="btn btn-xs btn-danger">
  						<i class="fa fa-trash"></i>
  					</button>
  				{!! Form::close() !!}
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