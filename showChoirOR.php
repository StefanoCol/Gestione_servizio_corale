<input type="hidden" id="idDate" name="idDate" value="<?php echo $_GET['idDate']?>">
<div>
    <div>Chi vuol coprire questa data?</div>
    <div>
        <select onchange="javascript:playDateII(this.value)">
          <option value="null">--Seleziona qui--</option>  
          <option value="Coro">Coro</option>
          <option value="Solista">Solista</option>
        </select>
    </div>
</div>