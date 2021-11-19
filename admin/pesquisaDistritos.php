<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$data = addslashes($_POST['txt']);
$sql = "select * from distritos where distritoNome like '%$data%'";
$result=mysqli_query($con,$sql);
?>
<tr>
    <th style="width: 10%">
        Id
    </th>
    <th style="width: 70%">
        Nome
    </th>
    <th class="text-center">
        Opções
    </th>
</tr>


<?php
while ($dados=mysqli_fetch_array($result)) {
?>
<tr>
    <td style="width: 10%" class="text-center"><?php echo $dados['distritoId']?></td>
    <td style="width: 70%"><?php echo $dados['distritoNome']?></td>
    <td class="text-center">
        <a href="editaDistrito.php?id=<?php echo $dados['distritoId']?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
        <a href="eliminaDistrito.php?id=<?php echo $dados['distritoId']?>" class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
    </td>
</tr>
<?php
}
?>