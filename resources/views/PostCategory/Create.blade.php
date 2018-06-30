@extends('Adminlayouts/master_layout')
@section('title','This is title')


@section('content')

<h1>Post Category Create </h1><hr>
<form action="/PostCategory/Store" method="Post">
	<input type="text" name="name" value="{{ old('name') }}">
	{{ csrf_field() }}
	<input type="submit" value="Create">
</form>

@include('AdminLayouts/validation_error_message')

@endsection