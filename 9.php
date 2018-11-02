<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ', $allTheStates);
$i = 0;

foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "\n<br>The States that ends in xas:" . $state."<br>";
 }
}

foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\n<br>The states that begins with k ans ends in s:" . $state."<br>";
 }
}

foreach($states1 as $state) {
if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\n<br>The states that begins with M and ends in s:" . $state."<br>";
}
}

foreach($states1 as $state) {
  if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\n<br>The states that ends in a:" . $state;
}
}
foreach ($statesArray as $element => $value) {
 print( "\n<br>" . $value . " is the element " . $element."<br>");
}
?>
