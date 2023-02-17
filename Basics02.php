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
?>