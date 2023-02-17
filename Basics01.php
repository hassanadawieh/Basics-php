Hello world, Help me I am using PHP
<?php
echo "I am getting errors but I can't see the errors.";
print("<br>");
print("Search on how to enable PHP Errors");
print("<br>");
// Create string variables
$name = "Hassan";
$position = "Student";
$email = "Hassan@gmail.com";
$github_url = "https://github.com/hassan";
$height = 3;
$width = 5;
// Output
echo 'My name is "' . $name . '" and my email is "' . $email . '".<br>';
$area = $height * $width;

// Output the area variable
echo "The area is: " . $area;
print("<br>");
print("<br>");
print("<br>");

// Using double quotes and the "." operator
echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url."<br>";

// Using double quotes and curly braces without the "." operator
echo "Hello, I'm {$name}, I'm a {$position} please check my github link {$github_url}<br>";

// Using single quotes and the "." operator
echo 'Hello, I\'m '.$name.', I\'m a '.$position.' please check my github link '.$github_url.'<br>';

// Without using the "." operator or previous solutions
echo "Hello, I'm $name, I'm a $position please check my github link $github_url<br>";


print("<br>");
print("<br>");
print("<br>");
// New variables
$course_name = "Web Development with PHP";
$enrolled_students = 1000;
$price = 100;
$discount = false;

// Output the course information
echo "Course Name: ".$course_name."<br>";
echo "Enrolled Students: ".$enrolled_students."<br>";
echo "Price: ".$price."<br>";
echo "On Discount: ";
if ($discount) {
    echo "Yes";
} else {
    echo "No";
}
print("<br>");
print("<br>");
print("<br>");

// function to calculate

function calculateArea($height, $width) {
    $area = $height * $width;
    echo "Area is ".$area;
}   

// call the function
calculateArea(7 ,4);

print("<br>");
print("<br>");
print("<br>");

//new variable
$birth_year = 2000;
$current_year = date('Y'); //this mean the date on Year now

$age = $current_year - $birth_year; // calculate the age

if ($age > 18) {
    echo "You can drive";
} else {
       echo "You're still a kid, go and play GTA";
}
print("<br>");
print("<br>");
print("<br>");

// array of items
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');

// Output the first 3 items and the last item of the array
echo 'Hello Sir, do you have '.$grocery[0].', '.$grocery[1].', and '.$grocery[2].'?'." ";
echo 'Also if you sell fruits can I find a '.$grocery[5].'?';

print("<br>");
print("<br>");
print("<br>");

var_dump($name);
var_dump($age);
?>