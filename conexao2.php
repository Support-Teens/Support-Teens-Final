<?php

$hostname ='localhost';
$username ='root';
$banco ='site1';
$senha ='';

$db = mysqli_connect($hostname,$username,$senha,$banco) or die (mysqli_error());
mysqli_select_db($db, $banco);

?>