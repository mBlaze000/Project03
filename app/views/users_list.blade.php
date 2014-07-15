@extends('_master')

@section('title')
	Generic Users
@stop

@section('users')
	active
@stop

@section('body')
	<p class="lead">Here is a list of your generic users:</p>
	{{$users}}
@stop

