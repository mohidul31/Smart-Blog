@extends('Adminlayouts/master_layout')
@section('title','Post')


@section('content')
	<a href="/Post/Create">Create New</a>
    <table class="table">
    	<tr>
    		<td>SL</td>
            <td>Post Title</td>
            <td>Post Description</td>
    		<td>Post Category Name</td>
    		<td>Post Tag</td>
    		<td>Action</td>
    	</tr>
    	<?php 
    	$sl=1;
    	foreach ($post_list as $p): ?>
    		<tr>
    			<td><?php echo $sl++; ?></td>
                <td><?php echo $p->PostTitle; ?></td>
                <td><?php echo $p->PostDescription; ?></td>
    			<td><?php echo $p->postCategory->name; ?></td>
    			<td><?php echo count($p->postTag); ?></td>
    			<td>
    				<a href="/Post/Edit/<?php echo $p->id; ?>">Edit</a> ||
    				<a href="/Post/Delete/<?php echo $p->id; ?>" onclick="return confirm('Are You Sure To Delete')">Delete</a>
    			</td>
    		</tr>
    	<?php endforeach ?>
	</table>
	
	{{ $post_list->links() }}
@endsection