<?php

$n = 9;
$k = 7;
$a = 0;
for($i=0; $i < pow($n, $k); $i++) {
  $a += $i;
}
echo $a;