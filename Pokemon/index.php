<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
<?php

/*

Practice exerciseCopy paste the API response from https://pokeapi.co/api/v2/pokemon?offset=0&limit=2000

Save these data to a file name data.json file in the same folder with your PHP content

Load the json content into your PHP, and parse it into a readable format for PHPCreate an HTML element that notifies the user about how many pokemons are being displayed, this number should come from the json content, not hardcoded

Loop through the list of pokemons, and only display the name, and the url of each pokemons

Display each pokemon with an index number (0 - 1118)

Split the array into chunks of 50 pokemons, limit the result to only show the 3rd group of 50 pokemons. 

Allow a page parameter to your PHP application, display the corresponding group of 50 pokemons according to the user query parameter. Such as localhost:5000/?page=15 should display the 15th group of 50 pokemons. 
*/

$data = file_get_contents( 'data.json');
$json = json_decode($data, true);
/*
echo '<pre>';
print_r($json);
echo '</pre>';
*/
$count_array = count($json['results']);
echo 'Count: '.$count_array;

foreach($json['results'] as $results) {
    echo '<h4> Name: ' . $results['name'] . '</h4>';
    echo '<p> URL: ' . $results['url'] . '</p>';
}




?>
    
</body>
</html>