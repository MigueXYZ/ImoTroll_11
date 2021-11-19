<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(FREGUESIAS);
$sql="select * from freguesias where freguesiaId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Edita Freguesia</h1>
    <form action ="confirmaEditarFreguesia.php" method="post">
        <div class="mb-3">
            <label for="distrito" class="form-label">Freguesia</label>
            <input type="text" name="nomeFreguesia" class="form-control" id="distrito" value="<?php echo $dados['freguesiaNome'];?>">
            <input type="hidden" name="idFreguesia" value ="<?php echo $_GET['id']?>">
        </div>
        <div class="mb-3">
            <label for="concelho" class="form-label">Concelho</label>
            <select name="idConcelho" class="form-select">
                <?php
                $sql_op="select * from concelhos";
                $result_op=mysqli_query($con,$sql_op);
                while($dados_op=mysqli_fetch_array($result_op)){
                    ?>
                    <option <?php echo ($dados['freguesiaConcelhoId'] == $dados_op['concelhoId']?"selected":"")?> value="<?php echo $dados_op['concelhoId'];?>"><?php echo $dados_op['concelhoNome'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Corfirma"></div>
    </form>
</div>