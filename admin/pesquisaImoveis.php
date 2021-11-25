<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$data = addslashes($_POST['txt']);
$sql = "select * from imoveis inner join freguesias on imoveis.imovelFreguesiaId=freguesias.FreguesiaId inner join imoveltipos on imoveis.imovelImovelTipoId = imoveltipos.imovelTipoId where imovelNome like '%$data%'";


$result=mysqli_query($con,$sql);
?>
<tr>
    <th class="text-center">
        Destaque
    </th>
    <th  class="text-center">
        Id
    </th>
    <th class="text-center">
        Nome
    </th>
    <th  class="text-center">
        Morada
    </th>
    <th  class="text-center">
        Preco
    </th>
    <th  class="text-center">
        Freguesia
    </th>
    <th class="text-center">
        Tipo
    </th>
    <th class="text-center">
        Opções
    </th>
</tr>
<?php


$txt="Confirma a eliminação de ";

while ($dados=mysqli_fetch_array($result)) {
?>
<tr>
    <td class="text-center">
        <a class="btn btn-sm btn-success" value="<?php echo $dados['imovelId']?>" onclick="atualizaImovel(<?php echo $dados['imovelId']?>)">
            <i class="bi bi-star<?php echo ($dados['imovelDestaque']=='destaque'?"-fill":"")?>"></i>
        </a>
    </td>
    <td class="text-center"><?php echo $dados['imovelId']?></td>
    <td class="text-center"><?php echo $dados['imovelNome']?></td>
    <td class="text-center"><?php echo $dados['imovelMorada'];?></td>
    <td class="text-center"><?php echo $dados['imovelPreco'];?></td>
    <td class="text-center"><?php echo $dados['freguesiaNome'];?></td>
    <td class="text-center"><?php echo $dados['imovelTipoNome'];?></td>
    <td class="text-center">
        <a href="editaImovel.php?id=<?php echo $dados['imovelId']?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
        <a href="form.php?id=<?php echo $dados['imovelId']?>" class="btn-sm btn-success"><i class="bi bi-aspect-ratio"> Foto</i></a>
        <a href="#" onclick="getMessage('Elimina','<?php echo $txt?>',<?php echo $dados['imovelId']?>, 'imoveis','imovelNome');" class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
    </td>
</tr>
<?php
}
?>