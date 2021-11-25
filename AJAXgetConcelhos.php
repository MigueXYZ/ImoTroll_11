<label for="selConcelhos">Concelho</label>
<select onchange="preencheFreguesia(this.value);" id="selConcelho" name="selConcelho">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from concelhos where concelhoDistritoId=".$_POST['idDistrito'];
        $result=msqli_query($con,$sql);
        while($dados=msqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['concelhoId'] ?>"><?php echo $dados['concelhoNome']?></option>
    <?php
        }
    ?>
</select>
