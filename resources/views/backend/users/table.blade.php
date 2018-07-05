<table class="table table-bordered table-hover">
	<thead>
		<th width="80">Action</th>
    <th>Name</th>
    <th>Email</th>
    <th>Post Count</th>
		<th>Role</th>
	</thead>
	<tbody>
    <?php $currentUser = auth()->user(); ?>
		@foreach($users as $user)
			<tr>
  			<td>
    				<a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>
            @if($user->id == config('cms.default_user_id') || $user->id == $currentUser->id)
              <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                <i class="fa fa-times"></i>
              </button>
            @else
    					<a href="{{ route('users.confirm', $user->id) }}" onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">
    						<i class="fa fa-times"></i>
    					</a>
            @endif
  			</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->posts->count() }}</td>

        @if ($userRole = $user->roles->first())
          <td>{{ $userRole->display_name }}</td>
        @endif
        
  		</tr>
		@endforeach
	</tbody>
</table>