<?php

    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);

    $command = "DELETE FROM `servizio_cori`.`membri` WHERE `membri`.`idMembro` = ".$_GET['id'];
    $query = mysql_query($command, $connection) or die("query fallita.");
    echo("Eliminazione avvenuta correttamente!");

?>
