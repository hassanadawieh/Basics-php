<?php
$x1 = 1;
while($x1 <=5){
    echo "Increment Number : $x1";
    echo "Hello World";
    $x1 += 1 ;
    print("<br>");
}
$x2 = 1;
while($x2 <= 8) {
  $i = 1;
  while($i <= $x2) {
    echo "*";
    $i++;
  }
  print( "<br>");
  $x2++;
}
$x = 1;
$x3 = 6;
while($x3 > 0){
    $x =$x * $x3;
    $x3 -= 1;
}
echo $x;
print("<br>");
print("<br>");
print("<br>");

function countWord($text, $word) {
  $words = explode(" ", $text);
  $count = 0;
  $i = 0;
  while($i < count($words)) {
    if($words[$i] == $word) {
      $count++;
    }
    $i++;
  }
  return $count;
}

echo countWord('hello how are you hello I\'m fine','hello');

?>