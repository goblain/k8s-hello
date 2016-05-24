<?php

$n = 9;
$k = 7;
$a = 0;
for($i=0; $i < pow($n, $k); $i++) {
  $a += $i;
}


echo('<h2>Your random assigned name :<h2> '.file_get_contents('http://namegen'));