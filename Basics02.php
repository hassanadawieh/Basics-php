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
?>