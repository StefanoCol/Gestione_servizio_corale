<input type="hidden" name="type" id="type" value="Solista">
<?php
    
    $host = "localhost";   
    $user = "root";
    $pass = "";
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    $command = "select TipoServizio, Data, OraInizio, ToponimoIndirizzo, NomeIndirizzo, NumeroIndirizzo, Provincia, idDataServizio from date_servizi where isCoperta=1 && Data>CURDATE()";
    $query = mysql_query($command, $connection);

    
    $primo = 1;
    while ($row = mysql_fetch_row($query)){
        if($primo == 1){
            echo    "<div>Clicca su una data per aggiungere un solista</div><br />
                    <table>
                        <thead>
                            <tr>
                                <th>Tipo di Servizio</th>
                                <th>Data</th>
                                <th>Ora di Inizio</th>
                                <th>Indirizzo</th>
                            </tr>
                        </thead>
                        <tbody>";
            $primo=0;
            
        }
        echo "<tr id='".$row[7]."' onclick='javascript:playDateII(\"Solista\", this.id)'>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]." ".$row[4]." ".$row[5].", ".$row[6]."</td>";
        echo"</tr>";
    }

    if($primo==1){
        echo "Non ci sono date da coprire.";
    }

?>
        
        
    </tbody>
</table>
