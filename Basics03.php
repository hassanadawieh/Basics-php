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
print("<br>");
print("<br>");
print("<br>");
$N = 0;
$text = "123456";
for($i = 0 ;$i < strlen($text);$i++){
    
    $N +=$text[$i];
} 
echo $N;
print("<br>");
print("<br>");
print("<br>");

$side1 = 10;
$side2 = 10; 
$diagonal = 15; 

if ($side1 == $side2 && $diagonal * $diagonal == $side1 * $side1 + $side2 * $side2) {
    echo "The parallelogram is a rectangle.";
} elseif ($side1 == $side2 && $diagonal * $diagonal != $side1 * $side1 + $side2 * $side2) {
    echo "The parallelogram is a rhombus.";
} else {
    echo "The shape is a parallelogram but not a rectangle or a rhombus.";
}
print("<br>");
print("<br>");
print("<br>");

$b = 8;
for($i = 0 ; $i <= $b ; $i++){
    for($j = 0 ; $j <= $i; $j++){
    echo "*";
    }
  print("<br>");  
}
for($i = $b ; $i >= 0 ; $i--){
    for($j = 0 ; $j <= $i; $j++){
    echo "*";
    }
  print("<br>");  
}
print("<br>");
print("<br>");
print("<br>");

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($i == 0 || $i == 6 || $i + $j == 6) {
            echo "*";
        } else {
            echo " ";
        }
    }
    print("<br>");
}

print("<br>");
print("<br>");
print("<br>");


$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

foreach ($transactions as $transaction) {
    $amount = abs($transaction["debit"] - $transaction["credit"]);
    echo "ID: " . $transaction["id"] . " => amount: " . $amount ;
    print("<br>");
}
print("<br>");
print("<br>");
print("<br>");


$transaction2 = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach ($transaction2 as $transaction){
    echo "id: " . $transaction["id"] .", ". " name: " . $transaction["name"] .", ". " email: ". $transaction["email"] ;
    print("<br>");
}
print("<br>");
print("<br>");
print("<br>");


function print_personal_details($test) {
  foreach ($test as $key => $value) {
    echo "$key=$value";
    print("<br>");
  }
}

$personal_details = array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");
print_personal_details($personal_details);
print("<br>");
print("<br>");   
print("<br>");
print("<br>");

?>