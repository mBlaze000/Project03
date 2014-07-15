@extends('_master')

@section('title')
	Generate Generic Users
@stop

@section('users')
	active
@stop

@section('body')
	<p class="lead">Use this form to create however many users you might need.</p>
    <form method="post">
        <p>
            <label for="num_users">Number of users:</label>
            <select name="num_users" id="num_users">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
            </select>
        </p>
        <p>
            <label>
                <input type="checkbox" name="inc_location" value="inc_location"/> Include location
            </label>
            <br />
            <label>
                <input type="checkbox" name="inc_birthdate" value="inc_birthdate"/> Include birthdate
            </label>
            <br />
            <label>
                <input type="checkbox" name="inc_information" value="inc_information"/> Include profile blurb
            </label>
        </p>
        <p>
            <input name="Generate Users" type="submit" value="Generate Users" />
        </p>
    </form>
@stop

