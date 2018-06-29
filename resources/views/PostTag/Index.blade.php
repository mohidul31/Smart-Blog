@extends('Adminlayouts/master_layout')
@section('title','This is title')


@section('content')
	<a href="/PostTag/Create">Create New</a>
    <table class="table">
    	<tr>
    		<td>SL</td>
    		<td>Post Tag Name</td>
    		<td>Action</td>
    	</tr>
    	<?php 
    	$sl=1;
    	foreach ($PostTag as $p): ?>
    		<tr>
    			<td><?php echo $sl++; ?></td>
    			<td><?php echo $p->name ?></td>
    			<td>
    				<a href="/PostTag/Edit/<?php echo $p->id; ?>">Edit</a> ||
    				<a href="/PostTag/Delete/<?php echo $p->id; ?>" onclick="return confirm('Are You Sure To Delete')">Delete</a>
    			</td>
    		</tr>
    	<?php endforeach ?>
    </table>
@endsection