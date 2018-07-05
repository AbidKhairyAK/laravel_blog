<table class="table table-bordered table-hover">
	<thead>
		<th width="80">Action</th>
		<th>Title</th>
		<th width="120">Post Count</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
			<tr>
  			<td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]]) !!}
    				<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>
            @if($category->id == config('cms.default_category_id'))
              <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                <i class="fa fa-times"></i>
              </button>
            @else
    					<button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">
    						<i class="fa fa-times"></i>
    					</button>
            @endif
  				{!! Form::close() !!}
  			</td>
        <td>{{ $category->title }}</td>
  			<td>{{ $category->posts->count() }}</td>
  		</tr>
		@endforeach
	</tbody>
</table>