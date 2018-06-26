@extends('blog.layout')

@section('content')
<div class="row">
			<div class="col-md-12">
				<h1>Blog</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				@foreach ($blog as $value)
					<h2>{{ $value->title }}</h2>
					<h5>Published: {{ $value->created_at }}</h5>
					<p>{{ $value->body }}</p>
					<a href="{{ route('blog.single', $value->id) }}" class="btn btn-primary">Read More</a>
				@endforeach
			</div>
		</div>
		<br>
	{{ $blog->links() }}
@endsection