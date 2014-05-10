<?php
    
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);

    $command="select Password from membri where idMembro=".$_GET["idSolista"];
    
    $query=mysql_query($command, $connection);
    $riga = mysql_fetch_row($query);
    if($riga[0] == $_GET["password"]){
        $command = "INSERT INTO `servizio_cori`.`servizi_coperti_solisti` (`idData`, `idSolista`) VALUES ('".$_GET["idDataServizio"]."', '".$_GET["idSolista"]."');";
        mysql_query($command, $connection);

        echo "Aggiunta avvenuta correttamenta";        

    }else{
        echo "password non corretta!!";
    }

?>
