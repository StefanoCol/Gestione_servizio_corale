<div class="container">
    <div class="row">
        <div class="col-xs-2 labelDes">
            coro:
        </div>
        <div class="col-xs-4">
            <?php
                require("config.php");
                $connection = mysql_connect($host,$user,$pass);    
                mysql_select_db('servizio_cori', $connection);

                echo '<br /><select name="slcChoir" id="slcChoir">';
                echo '<option value="null">--seleziona il coro qui--</option>';

                $command = "select idCoro, nome from cori";
                $query = mysql_query($command, $connection);


                while ($row = mysql_fetch_row($query)){
                        echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }

                echo "</select>";

            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Nome:
        </div>
        <div class="col-xs-4">
            <input type="text" name="nome" id="nome" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Cognome:
        </div>
        <div class="col-xs-4">
            <input type="text" name="cognome" id="cognome" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Indirizzo:
        </div>
        <div class="col-xs-6">
            <select name="toponimo" id="toponimo">
                <option value="Via">Via</option>
                <option value="Piazza">Piazza</option>
                <option value="Viale">Viale</option>
            </select>
            <input type="text" id="Indirizzo" name="Indirizzo" />
            civico:
            <input type="number" id="civico" name="civico" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Provincia:
        </div>
        <div class="col-xs-4">
            <input type="text" id="Provincia" name="Provincia" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Telefono:
        </div>
        <div class="col-xs-4">
            <input type="text" name="telefono" id="telefono" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Ruolo:
        </div>
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-4">
                    <select name="ruolo" id="ruolo" onchange="javascript:opzioniMembro(this.value)">
                        <option value="chitarrista">Chitarrista</option>
                        <option value="corista">Corista</option>                        
                    </select>
                </div>
                <div class="col-xs-8">
                    <div id="divOpzioniVoce" class="row">
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Password Coro:
        </div>
        <div class="col-xs-4">
            <input type="password" name="passwordCoro" id="passwordCoro" />
        </div>
    </div>  
    <div class="row">
        <div class="col-xs-2 labelDes">
            Password elemento:
        </div>
        <div class="col-xs-4">
            <input type="text" name="passwordElemento" id="passwordElemento" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <input type="button" name="btnEnterDate" value="Invia" onClick = "javascript:inserisciElementoII()">
        </div>
    </div>
</div>

