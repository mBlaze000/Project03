@extends('_master')

@section('title')
	Generate Lorem Ipsum Text
@stop

@section('lorem')
	active
@stop

@section('body')
	<p class="lead">Use this tool to select how many paragraphs you might need.</p>
    <form method="post">
        <p>
            <label for="num_paragraphs">Number of paragraphs:</label>
            <select name="num_paragraphs" id="num_paragraphs">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>
        <p>
            <input name="Generate Lorem Ipsum" type="submit" value="Generate Lorem Ipsum" />
        </p>
    </form>
@stop

