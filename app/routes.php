<?php

// Home page
Route::get('/', function()
{
	return View::make('welcome');
});

// Display the Lorem Ipsum form
Route::get('/lorem', function()
{
	return View::make('lorem');
});

// Process/display the Lorem Ipsum paragraphs
Route::post('/lorem', function()
{
    $input =  Input::get('num_paragraphs');
	$lorem = "\n";
	$generator = new Badcow\LoremIpsum\Generator();
	
	//Generate the number of parargraphs based on user input
	$paragraphs = $generator->getParagraphs($input);
	
	//Build string variable for paragraph output on page
	for ($i=0; $i < $input; $i++) {
		$lorem .= "\t\t\t".'<p>';
		$lorem .= $paragraphs[$i];
		$lorem .= '</p>'."\n";
	}
	return View::make('lorem_list')->with('lorem',$lorem);
});

// Display the Generic Users form
Route::get('/users', function()
{
	return View::make('users');
});

// Process/display the Generic Users list
Route::post('/users', function()
{
	// Create a Faker\Generator instance
	$faker = Faker\Factory::create();
    $input =  Input::all();
	$users = "\n";
	
	// Build string variable for user output on page
	for ($i=0; $i < $input['num_users']; $i++) {
		$users .= "\t\t\t".'<p>';
		$users .= '<span class="name">'.$faker->name.'</span>';
		
		// Include hometown if location is selected by user
		if(isset($input['inc_location'])) {
			$users .= '<br><span class="location">Hometown:</span> '.$faker->city.', '.$faker->stateAbbr;
		}
		
		// Include birthday if birthdate is selected by user
		if(isset($input['inc_birthdate'])) {
			$users .= '<br><span class="birthdate">Date of Birth:</span> '.$faker->monthName." ".$faker->dayOfMonth.", ".$faker->year;
		}
		
		// Include information if profile blurb is selected by user
		if(isset($input['inc_information'])) {
			$users .= '<br><span class="information">'.$faker->realText.'</span>';
		}
		$users .= '</p>'."\n";
	}
	return View::make('users_list')->with('users',$users);
});

