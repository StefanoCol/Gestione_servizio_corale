<?php
    
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);


    $command="select Password from cori where idCoro=".$_GET["idCoro"];
    
    $query=mysql_query($command, $connection);
    $riga = mysql_fetch_row($query);
    if($riga[0] == $_GET["passwordCoro"]){

        $query = "INSERT INTO `servizio_cori`.`membri` "
                ."(`Nome`, `Cognome`, `Password`, `ToponimoIndirizzo`, `NomeIndirizzo`, `NumeroIndirizzo`, `Provincia`, `Telefono`, `idCoro`) "
                ."VALUES ('".$_GET["nome"]."', '".$_GET["cognome"]."', '".$_GET["passwordElemento"]."', '".$_GET["toponimo"]."', '".$_GET["indirizzo"]."', '".$_GET["civico"]."', '".$_GET["provincia"]."', '".$_GET["telefono"]."', '".$_GET["idCoro"]."');";
    
        $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

        $query = "select max(idMembro) from membri";
        $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());
        $riga = mysql_fetch_row(mysql_query($query, $connection));

        $query = "INSERT INTO coristi (idCorista, IsSolista, Voce) VALUES (".$riga[0].",".$_GET['solista'].",'".$_GET['voce']."');";
        $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

        echo "Nuova corista inserito correttamente!";
        
    }else{
        echo "password non corretta!!";
    }
            


?>