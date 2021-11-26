<?php if($_POST['idDistrito']!='-1') {
?>
<select class="form-select " onchange="preencheFreguesias(this.value);" id="selConcelho" name="selConcelho">
    <option value="-1">Todos</option>
    <?php
        include_once("includes/body.inc.php");
        $sql="select * from concelhos where concelhoDistritoId=".$_POST['idDistrito'];
        $result=mysqli_query($con,$sql);
        while($dados=mysqli_fetch_array($result)){
    ?>
            <option value="<?php echo $dados['concelhoId'] ?>"><?php echo $dados['concelhoNome']?></option>
    <?php
        }
    ?>
</select>
<?php
}else echo "";
?>