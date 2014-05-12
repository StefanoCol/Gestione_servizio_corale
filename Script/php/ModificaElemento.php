<?php
    
    require("config.php");
    $connection = mysql_connect($host,$user,$pass);    
    mysql_select_db('servizio_cori', $connection);

    if($_GET['tipo'] == 'coris')
        $command=   "select nome, cognome, toponimoIndirizzo, NomeIndirizzo, NumeroIndirizzo, Provincia, telefono, voce, isSolista
                from membri as m inner join coristi as c on m.idMembro = c.idCorista 
                where idMembro=".$_GET["id"];
    else
        $command=   "select nome, cognome, password, toponimoIndirizzo, NomeIndirizzo, NumeroIndirizzo, Provincia, telefono 
                from membri as m inner join chitarristi as ch on m.idMembro = ch.idChitarrista 
                where idMembro=".$_GET["id"];

    $query=mysql_query($command, $connection);
    $riga = mysql_fetch_row($query);


?>

<div class="row">
        <div class="col-xs-2 labelDes">
            Nome:
        </div>
        <div class="col-xs-4">
            <input type="text" name="nome" id="nome" value="<?php echo $riga[0]?>" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Cognome:
        </div>
        <div class="col-xs-4">
            <input type="text" name="cognome" id="cognome" value="<?php echo $riga[1]?>" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Indirizzo:
        </div>
        <div class="col-xs-6">
            <select name="toponimo" id="toponimo">
                <?php
                    if($riga[2] == 'Via')
                        echo'<option value="Via">Via</option><option value="Piazza">Piazza</option><option value="Viale">Viale</option>'; 
                    else if($riga[2] == 'Viale')
                        echo'<option value="Viale">Viale</option><option value="Via">Via</option><option value="Piazza">Piazza</option>';
                    else if($riga[2] == 'Piazza')
                        echo'<option value="Piazza">Piazza</option><option value="Via">Via</option><option value="Viale">Viale</option>';
                    else
                        echo'<option value="Via">Via</option><option value="Piazza">Piazza</option><option value="Viale">Viale</option>';
                ?>
            </select>
            <input type="text" id="Indirizzo" name="Indirizzo" value="<?php echo $riga[3]?>" />
            civico:
            <input type="number" id="civico" name="civico" value="<?php echo $riga[4]?>" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Provincia:
        </div>
        <div class="col-xs-4">
            <input type="text" id="Provincia" name="Provincia" value="<?php echo $riga[5]?>" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Telefono:
        </div>
        <div class="col-xs-4">
            <input type="text" name="telefono" id="telefono" value="<?php echo $riga[6]?>" />
        </div>
    </div>
    <div class="row">
        <?php
            if($_GET["tipo"] == 'coris'){
                echo"<div class='col-xs-6'>Tipo di voce: <select name='slcVoci' id='slcVoci'>";
                if($riga[7] == 'soprano'){
                    echo"<option value='soprano'>Soprano</option>"
                        ." <option value='contralto'>Contralto</option>"
                        ." <option value='tenore'>Tenore</option>"
                        ." <option value='barittono'>Barittono</option>";
                }
                if($riga[7] == 'contralto'){
                    echo" <option value='contralto'>Contralto</option>"
                        ."<option value='soprano'>Soprano</option>"                        
                        ." <option value='tenore'>Tenore</option>"
                        ." <option value='barittono'>Barittono</option>";
                }
                if($riga[7] == 'tenore'){
                    echo" <option value='tenore'>Tenore</option>"
                            ."<option value='soprano'>Soprano</option>"
                            ." <option value='contralto'>Contralto</option>"
                            ." <option value='barittono'>Barittono</option>";
                }
                if($riga[7] == 'barittono'){
                    echo" <option value='barittono'>Barittono</option>"
                        ."<option value='soprano'>Soprano</option>"
                        ." <option value='contralto'>Contralto</option>"
                        ." <option value='tenore'>Tenore</option>";
                        
                }

                echo"</select></div><div class='col-xs-6'>Solista: <select name='slcSolista' id='slcSolista'>";

                if($riga[8] == 0)
                    echo" <option value='0'>No</option><option value='1'>Si</option>";
                else
                    echo"<option value='1'>Si</option><option value='0'>No</option>";
                echo"</select></div>";
            }
        ?>
    </div> 
    <div class="row">
        <div class="col-xs-2 labelDes">
            Password elemento:
        </div>
        <div class="col-xs-4">
            <input type="password" name="passwordElemento" id="passwordElemento" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <input type="button" name="btnEnterDate" value="Invia" onClick = "javascript:modificaElementoII(' <?php echo $_GET['id'] ?>', '<?php echo $_GET['tipo']?>')">
        </div>
    </div>