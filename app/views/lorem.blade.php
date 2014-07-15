@extends('_master')

@section('title')
	Generate Lorem Ipsum Text
@stop

@section('lorem')
	active
@stop

@section('body')
	<p class="lead">Use this form to create however many paragraphs you might need.</p>
    <form method="post">
        <p>
            <label for="num_paragraphs">Number of paragraphs:</label>
            <select name="num_paragraphs" id="num_paragraphs">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
        </p>
        <p>
            <input name="Generate Lorem Ipsum" type="submit" value="Generate Lorem Ipsum" />
        </p>
    </form>
@stop

