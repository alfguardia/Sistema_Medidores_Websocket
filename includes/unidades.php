<?php

$connection = mysqli_connect('localhost','root','root','novedades');

$query = "SELECT interno FROM unidades ORDER BY interno DESC";
$sql = mysqli_query($connection,$query);


?>