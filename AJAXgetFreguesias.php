<?php if($_POST['idConcelho']!='-1') {
?>
<select class="form-select " onchange="preenche($('#ordem').val(),$('#tipo').val(),this.value);" id="selFreguesia" name="selFreguesia">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from freguesias where freguesiaConcelhoId=".$_POST['idConcelho'];
        $result=mysqli_query($con,$sql);
        while($dados=mysqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['freguesiaId'] ?>"><?php echo $dados['freguesiaNome']?></option>
    <?php
        }
    ?>
</select>
    <?php
}else echo "";
?>