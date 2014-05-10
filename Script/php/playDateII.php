<input type="hidden" id="idDate" name="idDate" value="<?php echo $_GET['idDate']?>">
<?php
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);
    if ($_GET['type'] == 'Coro'){
        echo "Quale coro coprirà questa data?";
        echo '<br /><select name="slcChoir" id="slcChoir" onchange="javascript:playDateIII(this.value, \'C\')">';
        echo '<option value="null">--seleziona il coro qui--</option>';

        $command = "select idCoro, nome from cori";
        $query = mysql_query($command, $connection);


        while ($row = mysql_fetch_row($query)){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
        }

        echo "</select>";
    }else if($_GET['type'] == 'Solista'){
        echo "A quale coro appartiene il solista?";
        echo '<br /><select name="slcChoir" id="slcChoir" onchange="javascript:playDateIII(this.value, \'S\')">';
        echo '<option value="null">--seleziona il coro qui--</option>';

        $command = "select idCoro, nome from cori";
        $query = mysql_query($command, $connection);


        while ($row = mysql_fetch_row($query)){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
        }

        echo "</select>";
    }
?>

