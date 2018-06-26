@extends('blog.layout')

@section('content')
  <div class="row">
  	<div class="col-md-12">
  		<h1>Add Posts</h1>
  	</div>
  </div>

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(array('route' => 'post.store', 'data-parsley-validate' => '')) !!}
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', NULL, array('class' => 'form-control', 'required' => '', 'maxlength' => '225')) }}

        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', NULL, array('class' => 'form-control', 'required' => '')) }}

        {{ Form::submit('Add Post', array('class' => 'btn btn-primary', 'style' => 'margin-top: 20px')) }}

      {!! Form::close() !!}
    </div>
  </div>

 
@endsection