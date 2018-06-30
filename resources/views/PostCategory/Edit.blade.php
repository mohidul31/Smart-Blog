@extends('Adminlayouts/master_layout')
@section('title','This is title')


@section('content')

<h1>Post Tag Edit </h1><hr>
<form action="/PostCategory/Update/<?php echo $postCategory->id; ?>" method="Post">
	<input type="text" name="name" value="<?php echo $postCategory->name ?>">
	{{ csrf_field() }}
	<input type="submit" value="Edit">
</form>

@include('AdminLayouts/validation_error_message')

@endsection