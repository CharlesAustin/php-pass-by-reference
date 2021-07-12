<?php

// define a variable and assign a title
$variables = array(
	'title' => 'Hello World',
);

// pass argument by reference, allowing the function to modify the variable
function my_title(&$variables) {
	$variables['title'] = 'Hello Mars';
}

echo 'Before variable passed by reference:' . "\n";
// expected output: Hello World
print_r($variables)  . "\n";

// call function and pass variables to function
my_title($variables);

echo 'After variable passed by reference:' . "\n";
// Expected output: Hello Mars
print_r($variables) . "\n";


