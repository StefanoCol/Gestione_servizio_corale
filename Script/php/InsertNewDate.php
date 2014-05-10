<?php
    
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    $query = "INSERT INTO `servizio_cori`.`date_servizi`" 
                ."(`Data`, `isCoperta`, `OraInizio`, `TipoServizio`, `ToponimoIndirizzo`, `NomeIndirizzo`, `NumeroIndirizzo`, `Provincia`)" 
                ." VALUES ('".$_GET['data']."', '0', '".$_GET['ora'].":00', '".$_GET['tipoServizio']."', '".$_GET['toponimo']."', '".$_GET['indirizzo']."', '".$_GET['civico']."', '".$_GET['provincia']."');";
    
    $result = mysql_query($query, $connection) or die("Query non valida: " . mysql_error());

    echo "Nuova data inserita correttamente!";

?>
