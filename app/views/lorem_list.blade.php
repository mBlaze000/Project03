@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('lorem')
	active
@stop

@section('body')
	<p class="lead">Here are your lorem ipsum paragraphs:</p>
    <div class="well">{{$lorem}}
    </div>
@stop

