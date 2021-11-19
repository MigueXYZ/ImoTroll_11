<?php
include_once ("includes/body.inc.php");
global $con;
$n=$_POST['n'];
?>

<select name="idTipo" class="form-select">
    <?php
    $sql="select * from imovelTipos where imovelTipoGenero = '".$n."'";
    $result=mysqli_query($con,$sql);
    while($dados=mysqli_fetch_array($result)){
        ?>
        <option value="<?php echo $dados['imovelTipoId'];?>"><?php echo $dados['imovelTipoNome'];?></option>
        <?php
    }
    ?>
</select>
