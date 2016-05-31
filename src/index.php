<h2>Suggested random names :</h2>
<table>
<?php

$n = 9;
$k = 7;
$a = 0;
for($i=0; $i < pow($n, $k); $i++) {
  $a += $i;
}


for($i=0; $i<10; $i++) {
  $resp = json_decode(file_get_contents('http://namegen'));
  echo('<tr><td>Name: <b>'.$resp->name.'</b></td><td>Host: <b>'.$resp->hostname.'</b></td><td>Version: <b>'.$resp->version.'</b></td></tr>');
}
?>
</table>
