<?php

    echo "Seleziona il corista o il chitarrista che coprirà la data:<br />";    

    $host = "localhost";   
    $user = "root";
    $pass = "";
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    $command = "select idMembro, m.nome, m.cognome
                from membri as m inner join coristi as s 
                    on m.idMembro = s.idCorista
                where s.isSolista = 1 AND
                    m.idCoro=".$_GET['choirId'];
    $query = mysql_query($command, $connection);
    echo '<select name="slcMember" id="slcMember" onchange="javascript:playDateIII(this.value, "C")">';
    echo '<option value="null">--seleziona qui--</option>';
    while ($row = mysql_fetch_row($query)){
            echo "<option value='".$row[0]."'>Solista: ".$row[1]." ".$row[2]."</option>";
    }
    echo"</select>";

?>

<input type="hidden" id="idDate" name="idDate" value="<?php echo $_GET['idDate'] ?>">
<input type="hidden" id="slcChoir" name="slcChoir" value="<?php echo $_GET['choirId'] ?>">
<input type="hidden" id="type" name="type" value="<?php echo $_GET['typ'] ?>">