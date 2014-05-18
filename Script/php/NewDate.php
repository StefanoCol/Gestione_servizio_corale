<div class="container">
    <div class="row">
        <div class="col-xs-2 labelDes">
            Tipo di servizio:
        </div>
        <div class="col-xs-4">
            <select name="tipoServizio" id="tipoServizio">
                <option value="Messa Ordinaria">Messa Ordinaria</option>
                <option value="Matrimonio">Matrimonio</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Data:
        </div>
        <div class="col-xs-4">
            <input type="date" id="dataServizio" name="dataServizio" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 labelDes">
            Ora:
        </div>
        <div class="col-xs-4">
            <input type="time" id="oraServizio" name="oraServizio" />
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
        <div class="col-xs-6">
            <input type="button" name="btnEnterDate" value="Invia" onClick = "javascript:InsertNewDateII()">
        </div>
    </div>
</div>