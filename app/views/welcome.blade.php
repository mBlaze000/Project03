@extends('_master')

@section('home')
	active
@stop

@section('body')
	<p class="lead">Welcome to Developer's Best Friend.</p>
    
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-4">
            <h2>Create Lorem Ipsum</h2>
            <p>Use this tool to create lorem ipsum text. The text can be created at any length you need. </p>
            <p><a class="btn btn-primary" href="/lorem" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Create Generic Users</h2>
            <p>If you need to poulate a page with generic users, use this tool to generate those users.</p>
            <p><a class="btn btn-primary" href="/users" role="button">View details &raquo;</a></p>
        </div>
    </div>

@stop

