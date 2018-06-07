@extends('layouts.backend.main')

@section('title','Labaru | Users')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users
      <small>Display all users</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('users.index') }}">Users</a></li>
      <li class="active">All Users</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

    	<!-- box-header -->
      <div class="box-header with-border clearfix">
        <div class="pull-left">
          <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="box-tools pull-right" style="padding: 7px 0;">
          
        </div>
      </div>
      <!-- /.box-header -->

      <!-- box-body -->
      <div class="box-body">
        @include('backend.partials.message')

      	@if (! $users->count())
	      	<div class="alert alert-danger">
	      		<strong>No record found.</strong>
	      	</div>
	      @else
          @include('backend.users.table')
	      @endif
      </div>
      <!-- /.box-body -->

      <div class="box-footer clearfix">
      	<div class="pull-left">
	      	{{ $users->appends( Request::query() )->render() }}
      	</div>
      	<div class="pull-right text-muted">
      		<small>{{ $usersCount }} {{ str_plural('item', $usersCount) }}</small>
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