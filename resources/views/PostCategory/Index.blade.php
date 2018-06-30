@extends('Adminlayouts/master_layout')
@section('title','This is Post Category')


@section('content')
	<a href="/PostCategory/Create">Create New</a>
    <table class="table">
    	<tr>
    		<td>SL</td>
    		<td>Post Category Name</td>
    		<td>Action</td>
    	</tr>
    	<?php 
    	$sl=1;
    	foreach ($postCategoryList as $p): ?>
    		<tr>
    			<td><?php echo $sl++; ?></td>
    			<td><?php echo $p->name ?></td>
    			<td>
    				<a href="/PostCategory/Edit/<?php echo $p->id; ?>">Edit</a> ||
    				<a href="/PostCategory/Delete/<?php echo $p->id; ?>" onclick="return confirm('Are You Sure To Delete')">Delete</a>
    			</td>
    		</tr>
    	<?php endforeach ?>
    </table>
@endsection
