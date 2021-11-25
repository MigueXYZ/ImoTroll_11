<label for="selDistritos">Distrito</label>
<select onchange="preencheConcelho(this.value);" id="selDistrito" name="selDistrito">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from distritos";
        $result=msqli_query($con,$sql);
        while($dados=msqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['distritoId'] ?>"><?php echo $dados['distritoNome']?></option>
    <?php
        }
    ?>
</select>
