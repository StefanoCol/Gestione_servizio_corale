<?php

    $host = "localhost";   
    $user = "root";
    $pass = "";
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    $query = "INSERT INTO `cori`(`nome`, `Password`) VALUES ('".$_GET['txtName']."','".$_GET['txtPassword']."')";
    
    $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

    echo "Coro Inserito Correttamente!";
?>


