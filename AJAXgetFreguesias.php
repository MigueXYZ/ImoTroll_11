<label for="selfreguesias">Freguesia</label>
<select onchange="preenche($('#ordem').val(),$('#tipo').val(),this.value);" id="selFreguesia" name="selFreguesia">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from freguesias where freguesiaConcelhoId=".$_POST['idConcelho'];
        $result=msqli_query($con,$sql);
        while($dados=msqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['freguesiaId'] ?>"><?php echo $dados['freguesiaNome']?></option>
    <?php
        }
    ?>
</select>
