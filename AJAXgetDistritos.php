
<select class="form-select " onchange="preencheConcelhos(this.value);if(this.value==='-1'){preencheFreguesias(-1);preenche($('#ordem').val(),$('#tipo').val(),-1);}" id="selDistrito" name="selDistrito">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from distritos";
        $result=mysqli_query($con,$sql);
        while($dados=mysqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['distritoId'] ?>"><?php echo $dados['distritoNome']?></option>
    <?php
        }
    ?>
</select>
