<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(CONCELHOS);
$sql="select * from concelhos where concelhoId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Edita Concelho</h1>
    <form action ="confirmaEditarConcelhos.php" method="post">
        <div class="mb-3">
            <label for="distrito" class="form-label">Concelho</label>
            <input type="text" name="nomeConcelho" class="form-control" id="distrito" value="<?php echo $dados['concelhoNome'];?>">
            <input type="hidden" name="idConcelho" value ="<?php echo $_GET['id']?>">
        </div>

        <div class="mb-3">
            <label for="distrito" class="form-label">Distrito</label>
            <select name="idDistrito" class="form-select">
                <?php
                $sql_op="select * from distritos";
                $result_op=mysqli_query($con,$sql_op);
                while($dados_op=mysqli_fetch_array($result_op)){
                ?>
                    <option <?php echo ($dados['concelhoDistritoId'] == $dados_op['distritoId']?"selected":"")?> value="<?php echo $dados_op['distritoId'];?>"><?php echo $dados_op['distritoNome'];?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Corfirma"></div>
    </form>
</div>