<?php 
$sql = "SELECT * from newsarticles";
$result = $mysqli->query($sql);
//var_dump($articles);
$result = convertResultsToArray($result);
