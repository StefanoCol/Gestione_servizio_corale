<?php
    
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);


    $command="select Password from membri where idMembro=".$_GET["id"];
    
    $query=mysql_query($command, $connection);
    $riga = mysql_fetch_row($query);
    if($riga[0] == $_GET["passwordElemento"]){

       $query = "update `servizio_cori`.`membri` "
                ."set nome='".$_GET["nome"]."', cognome='".$_GET["cognome"]."',toponimoIndirizzo='".$_GET["toponimo"]."', nomeIndirizzo='".$_GET["indirizzo"]."', numeroIndirizzo='".$_GET["civico"]."', Provincia='".$_GET["provincia"]."', telefono='".$_GET["telefono"]."' where idMembro = ".$_GET['id'];
    
        $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

        $query = "update coristi set isSolista=".$_GET["solista"].", voce='".$_GET["voce"]."' where idCorista = ".$_GET["id"];
        $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

        echo "Corista aggiornato correttamente!";
        
    }else{
        echo "password non corretta!!";
    }
            


?>