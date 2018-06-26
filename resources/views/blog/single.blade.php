@extends('blog.layout')

@section('content')
  <h2>{{$blog->title}}</h2>
	<br>
	<p>{{$blog->body}}</p>
@endsection