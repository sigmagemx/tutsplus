<?php

function changeJob($person, $newJob)
{
	$person['job'] = $newJob;
	return $person;
}

function happyBirthday($person)
{
	++$person['age'];
	return $person;
}

$person1 = array(
	'name' => 'Tom',
	'job' => 'Button-Pusher',
	'age' => 34
);

$person2 = array(
	'name' => 'John',
	'job' => 'Lever-Puller',
	'age' => 41
);

echo '<pre>Person 1: ', print_r($person1, TRUE), '</pre>';
echo '<pre>Person 2: ', print_r($person2, TRUE), '</pre>';

$person1 = changeJob($person1, 'Box-Mover');
$person1 = happyBirthday($person1);

$person2 = happyBirthday($person2);

echo '<pre>Person 1: ', print_r($person1, TRUE), '</pre>';
echo '<pre>Person 2: ', print_r($person2, TRUE), '</pre>';

?>