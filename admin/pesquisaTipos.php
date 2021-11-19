<?php
include_once("includes/body.inc.php");
$data = addslashes($_POST['txt']);
$sql = "select * from imoveltipos where imovelTipoNome like '%$data%'";


$result=mysqli_query($con,$sql);
?>
<tr>
    <th style="width: 10%" class="text-center">
        Id
    </th>
    <th style="width: 60%" class="text-center">
        Nome
    </th>
    <th style="width: 10%" class="text-center">
        Genero
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
    <td style="width: 10%" class="text-center"><?php echo $dados['imovelTipoId']?></td>
    <td style="width: 60%" class="text-center"><?php echo $dados['imovelTipoNome']?></td>
    <td class="text-center"><?php echo $dados['imovelTipoGenero'];?></td>
    <td class="text-center">
        <a href="editaTipo.php?id=<?php echo $dados['imovelTipoId']?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
        <a href="#" onclick="getMessage('Elimina','<?php echo $txt?>');"<?php //echo $dados['imovelTipoId']?> class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
       <!-- <a href="eliminaTipo.php?id=<?php //echo $dados['imovelTipoId']?>" class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a> -->
    </td>
</tr>
<?php
}
?>