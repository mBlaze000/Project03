<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('/lorem', function()
{
	return View::make('lorem');
});

Route::post('/lorem', function()
{
    $input =  Input::all();
	$lorem = "";
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($input['num_paragraphs']);
	for ($i=0; $i < $input['num_paragraphs']; $i++) {
		$lorem .= '<p>';
		$lorem .= $paragraphs[$i];
		$lorem .= '</p>'."\n";
	}
	return View::make('lorem_list')->with('lorem',$lorem);
});

Route::get('/users', function()
{
	return View::make('users');
});

Route::post('/users', function()
{
	$faker = Faker\Factory::create();
    $input =  Input::all();
	$users = "";
	for ($i=0; $i < $input['num_users']; $i++) {
		$users .= '<p>';
		$users .= '<span class="name">'.$faker->name.'</span>';
		if(isset($input['inc_location'])) {
			$users .= ' <span class="location">- '.$faker->city.', '.$faker->stateAbbr.'</span>';
		}
		if(isset($input['inc_birthdate'])) {
			$users .= ' <span class="birthdate">- Date of Birth:</span> '.$faker->monthName." ".$faker->dayOfMonth.", ".$faker->year;
		}
		if(isset($input['inc_information'])) {
			$users .= '<br><span class="information">'.$faker->realText.'</span>';
		}
		$users .= '</p>'."\n";
	}
	return View::make('users_list')->with('users',$users);
});




Route::get('/nothing', function() {

    $input =  Input::all();
    print_r($input);

});
