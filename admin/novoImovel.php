<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(IMOVEIS);
$sql="select * from imoveis";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

$sql2= "SHOW COLUMNS FROM imoveltipos WHERE Field = 'imovelTipoGenero'";
$res=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($res);
preg_match("/^enum\(\'(.*)\'\)$/", $dados2['Type'], $matches);
$enum = explode("','", $matches[1]);
?>
<div class="container w-100"><h1>Novo Imovel</h1>
    <form action ="confirmaNovoImovel.php" method="post">
        <div class="mb-3">
            <label for="distrito" class="form-label">Imovel</label>
            <input type="text" name="nomeImovel" class="form-control" id="distrito">

            <label for="distrito" class="form-label">Morada</label>
            <input type="text" name="moradaImovel" class="form-control" id="distrito">

            <label for="distrito" class="form-label">Preço</label>
            <input type="text" name="precoImovel" class="form-control" id="distrito">

            <input type="hidden" name="idImovel">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricaoImovel" class="form-control" id="myTextarea">
            </textarea>
        </div>
        <div class="mb-3">
            <label for="distrito" class="form-label">Freguesia</label>
            <select name="idFreguesia" class="form-select">
                <?php
                $sql_op="select * from freguesias";
                $result_op=mysqli_query($con,$sql_op);
                while($dados_op=mysqli_fetch_array($result_op)){
                    ?>
                    <option value="<?php echo $dados_op['freguesiaId'];?>"><?php echo $dados_op['freguesiaNome'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <?php
               foreach ($enum as $dados2){

                   ?>
            <input onclick="tipoGenero(this.value);" class="form-check-input" type="radio" name="generoImovel" id="<?php echo $dados2;?>" value="<?php echo $dados2;?>">
                   <label  class="form-check-label me-3" for="<?php echo $dados2;?>"><?php echo $dados2;?></label>
                   <?php
                }
            ?>

        </div>
        <div class="mb-3">
            <div id="destinoTipo">

            </div>
        </div>

        <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Corfirma"></div>
    </form>
</div>