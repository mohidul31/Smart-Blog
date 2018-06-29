@extends('Adminlayouts/master_layout')
@section('title','This is title')


@section('content')

<h1>Post Tag Create </h1><hr>
<form action="/PostTag/Store" method="Post">
	<input type="text" name="posttagname" value="{{ old('posttagname') }}">
	{{ csrf_field() }}
	<input type="submit" value="Create">
</form>

@include('AdminLayouts/validation_error_message')

@endsection