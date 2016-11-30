<?php
     $sql = "DELETE FROM newsarticles WHERE id=$id";
     echo $sql;
     $mysqli->query($sql);


?>