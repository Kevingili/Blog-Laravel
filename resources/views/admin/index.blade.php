@extends('blog.layout')

@section('content')
  <h1>Admin</h1>
  <div class="row">
  	<div class="col-md-12">
  		<h1>Add Posts</h1>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-12">
  		<table class="table table-bordered">
  			<thead>
  				<th>#</th>
  				<th>Title</th>
  				<th>Body</th>
  				<th>Created At</th>
  				<th class="text-center" width="130px;"><a href="{{ route('post.create') }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i></a></th>
  			</thead>
  			<tbody>
  					<?php $no = 0; ?>
          @foreach($blog as $value)
  					<tr>
  						<td>{{ $no++ }}</td>
  						<td>{{ $value->title }}</td>
  						<td>{{ $value->body }}</td>
  						<td>{{ $value->created_at }}</td>
  						<td>
  							<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
  							<a href="#" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
  							<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
  						</td>
  					</tr>
  				@endforeach
  			</tbody>
  		</table>
  	</div>
  </div>
@endsection