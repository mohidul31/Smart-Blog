@extends('Adminlayouts/master_layout')
@section('title','This is title')


@section('content')

<h1>Post Tag Create </h1><hr>
<form action="/Post/Store" method="Post">
	<input type="text" name="title" value="{{ old('title') }}"><br>
	<input type="text" name="PostDescription" value="{{ old('PostDescription') }}"><br>
	<select name="post_cat_id">
		<?php foreach ($post_cat_list as  $p): ?>
			<option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
		<?php endforeach ?>
	<select><br>
		<select name="post_tag_id[]" multiple>
		<?php foreach ($post_tag_list as  $p): ?>
			<option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
		<?php endforeach ?>
	<select><br>
	{{ csrf_field() }}
	<input type="submit" value="Create">
</form>


@include('AdminLayouts/validation_error_message')

@endsection