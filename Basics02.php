<?php
echo "Tomorrow I'll learn PHP global variables. <br>";
echo "This is a bad command: sudo rm -rf /";
print("<br>");
print("<br>");
print("<br>");
function greaterFn($num) {
  if ($num > 30) {
    return $num . " is greater than 30";
  } elseif ($num > 20) {
    return $num . " is greater than 20";
  } elseif ($num > 10) {
    return $num . " is greater than 10";
  } else {
    return $num . " is less than or equal to 10";
  }
}


echo greaterFn(40) . "<br>"; // 40 is greater than 30
echo greaterFn(21) . "<br>"; // 21 is greater than 20
echo greaterFn(12) . "<br>"; // 12 is greater than 10
echo greaterFn(8) . "<br>";  // 8 is less than or equal to 10

print("<br>");

// variable
$var1 = 45;
$var2 = 32;
echo"var1 = " . $var1 ."<br>";
echo"var2 = " . $var2 ."<br>";
print("<br>");
$temp = $var1;
$var1 = $var2;
$var2 = $temp;

echo"var1 = " . $var1 ."<br>";
echo"var2 = " . $var2 ."<br>";


print("<br>");
print("<br>");
print("<br>");


function isArmstrong($num) {
  $sum = 0;
  $temp = $num;
  $n = strlen($num);
  
  while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $n);
    $temp = intval($temp / 10);
  }
  
  return ($num == $sum);
}

echo isArmstrong(153) ? "true" : "false"; 
print("<br>");
print("<br>");
print("<br>");


function word_to_digit($word) {
  switch ($word) {
    case 'zero':
      return 0;
    case 'one':
      return 1;
    case 'two':
      return 2;
    case 'three':
      return 3;
    case 'four':
      return 4;
    case 'five':
      return 5;
    case 'six':
      return 6;
    case 'seven':
      return 7;
    case 'eight':
      return 8;
    case 'nine':
      return 9;
    default:
      return "Invalid input"; 
  }
}

echo word_to_digit('seven');
print("<br>");
print("<br>");
print("<br>");

function sum_of_digits($num) {
  $sum = 0;
  for ($i = 0; $i < strlen($num); $i++) {
    $sum += $num[$i]; 
  }
  return $sum;
}

echo sum_of_digits('1234');

print("<br>");
print("<br>");
print("<br>");

function replace_python($input) {
  $input = str_replace('Python ', ' PHP', $input); // replace "Python " with " PHP"
  $input = str_replace('Python', 'PHP', $input); // replace "Python" with "PHP"
  return $input;
}

echo replace_python("hello I'm Python can you help me todays! Python");

print("<br>");
print("<br>");
print("<br>");

function is_power_of_two($num) {
  if ($num < 0) { // if the number is not positive
    echo "$num is not positive" ;
  }else
  if (($num & ($num - 1)) == 0) { // if the number is a power of two
    echo "$num is a power of 2";
  }else {
    echo "$num is not a power of 2";
  }
  
}


is_power_of_two('4');

print("<br>");
print("<br>");
print("<br>");

$num = 16;
$sqrt = sqrt($num);
echo $sqrt;

print("<br>");
print("<br>");
print("<br>");

function check_palindrome($string){
    if($string == strrev($string)){
        return 1;
    }else {
        return 0;
    }
}

echo check_palindrome("level");
print("<br>");
echo check_palindrome("hassan");

print("<br>");
print("<br>");
print("<br>");

function Is_prime($n){
    $x = 2;
    if($x < $n){
        if($n%$x == 0){
            return 0;
        }else {
            $x++;
        }
    }
        return 1;
    }
    


echo Is_prime(4)
?>
