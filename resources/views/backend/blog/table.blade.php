<table class="table table-bordered table-hover">
	<thead>
		<th width="80">Action</th>
		<th>Title</th>
		<th width="120">Author</th>
		<th width="150">Category</th>
		<th width="170">Date</th>
	</thead>
	<tbody>

    <?php $request = request(); ?>

		@foreach($posts as $post)
			<tr>
  			<td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['blog.destroy', $post->id]]) !!}
    				@if (check_user_permissions($request, "Blog@edit", $post->id))
              <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-xs btn-default">
      					<i class="fa fa-edit"></i>
      				</a>
            @else
              <button class="btn btn-xs btn-default disabled">
                <i class="fa fa-edit"></i>
              </button>
            @endif

            @if (check_user_permissions($request, "Blog@destroy", $post->id))
    					<button type="submit" class="btn btn-xs btn-danger">
    						<i class="fa fa-trash"></i>
    					</button>
            @else
              <button type="button" onclick="return false" class="btn btn-xs btn-danger disabled">
                <i class="fa fa-trash"></i>
              </button>
            @endif
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