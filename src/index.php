<h2>Suggested random names :</h2>
<ul>
<?php

$n = 9;
$k = 7;
$a = 0;
for($i=0; $i < pow($n, $k); $i++) {
  $a += $i;
}


for($i=0; $i<10; $i++) {
  $resp = json_decode(file_get_contents('http://namegen'));
  echo('<li>Name: <b>'.$resp->name.'</b> - Host: <b>'.$resp->hostname.'</b> - Version: <b>'.$resp->version.'</b>');
}
?>
</ul>