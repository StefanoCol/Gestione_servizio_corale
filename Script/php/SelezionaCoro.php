<?php

    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    echo "Seleziona il coro:";
    echo '<br /><select name="slcChoir" id="slcChoir" onchange="javascript:visualizzaElementiII(this.value)">';
    echo '<option value="null">--seleziona il coro qui--</option>';

    $command = "select idCoro, nome from cori";
    $query = mysql_query($command, $connection);


    while ($row = mysql_fetch_row($query)){
            echo "<option value='".$row[0]."'>".$row[1]."</option>";
    }

    echo "</select>";

?>
