<?php

$hostname ='localhost';
$username ='dese0964_site1';
$banco ='dese0964_site1';
$senha ='si@171156';

$db = mysqli_connect($hostname,$username,$senha,$banco) or die (mysqli_error());
mysqli_select_db($db, $banco);

?>
