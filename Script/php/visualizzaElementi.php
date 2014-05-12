<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cogome</th>
            <th>Ruolo</th>
            <th></th>
            <th></th>
        </tr>
    <thead>
    <tbody>
    <?php
        
        require("config.php");
    
        $connection = mysql_connect($host,$user,$pass);    
        mysql_select_db('servizio_cori', $connection);
        $command = "select idMembro, m.nome, m.cognome
                    from membri as m inner join coristi as s 
                        on m.idMembro = s.idCorista
                    where m.idCoro=".$_GET['choirId'];
        $query = mysql_query($command, $connection);

        while ($row = mysql_fetch_row($query))
                echo "<tr value='".$row[0]."'>"
                        ."<td>".$row[1]."</td>"
                        ."<td>".$row[2]."</td>"
                        ."<td>Corista</td>"
                        ."<td><a href='javascript:cancellaElemento($row[0])' class='btn btn-danger'>cancella</a></td>"
                        ."<td><a href=\"javascript:modificaElemento($row[0], 'coris')\" class='btn btn-default'>Modifica</a></td>"
                        ."</tr>";
    
        $command = "select idMembro, m.nome, m.cognome
                    from membri as m inner join chitarristi as c 
                        on m.idMembro = c.idChitarrista
                    where m.idCoro=".$_GET['choirId'];
        $query = mysql_query($command, $connection);
        while ($row = mysql_fetch_row($query))
                echo "<tr value='".$row[0]."'><td>".$row[1]."</td><td>".$row[2]."</td><td>Chitarrista</td>"
                        ."<td><a href='javascript:cancellaElemento($row[0])' class='btn btn-danger'>cancella</a></td>"
                        ."<td><a href=\"javascript:modificaElemento($row[0], 'chita')\" class='btn btn-default'>Modifica</a></td>"
                        ."</tr>";
        echo"</select>";

    ?>
    </tbody>
</table>
