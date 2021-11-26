<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(IMOVEIS);
$sql="select * from imoveis where imovelId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Edita Imovel</h1>
    <form action ="confirmaEditarImovel.php" method="post">
        <div class="mb-3">
            <label for="distrito" class="form-label">Imovel</label>
            <input type="text" name="nomeImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelNome'];?>">

            <label for="distrito" class="form-label">Morada</label>
            <input type="text" name="moradaImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelMorada'];?>">

            <label for="distrito" class="form-label">Preço</label>
            <input type="text" name="precoImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelPreco'];?>">

            <input type="hidden" name="idImovel" value ="<?php echo $_GET['id']?>">

            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricaoImovel"  class="form-control" id="myTextarea"><?php echo $dados['imovelDescricao'];?></textarea>
        </div>
        <div class="mb-3">
            <label for="freguesia" class="form-label">Freguesia</label>
            <select name="idFreguesia" class="form-select">
                <?php
                $sql_op="select * from freguesias";
                $result_op=mysqli_query($con,$sql_op);
                while($dados_op=mysqli_fetch_array($result_op)){
                    ?>
                    <option <?php echo ($dados['imovelFreguesiaId'] == $dados_op['freguesiaId']?"selected":"")?> value="<?php echo $dados_op['freguesiaId'];?>"><?php echo $dados_op['freguesiaNome'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <select name="idTipo" class="form-select">
                <?php
                $sql_o="select * from imovelTipos";
                $result_o=mysqli_query($con,$sql_o);
                while($dados_o=mysqli_fetch_array($result_o)){
                    ?>
                    <option <?php echo ($dados['imovelImovelTipoId'] == $dados_o['imovelTipoId']?"selected":"")?> value="<?php echo $dados_o['imovelTipoId'];?>"><?php echo $dados_o['imovelTipoNome'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Corfirma"></div>
    </form>
</div>