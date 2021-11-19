<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$data = addslashes($_POST['txt']);
$sql = "select * from distritos inner join concelhos on distritoId = concelhoDistritoId where concelhoNome like '%$data%'";


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
        Distrito
    </th>
    <th class="text-center">
        Opções
    </th>
</tr>
<?php


while ($dados=mysqli_fetch_array($result)) {
?>
<tr>
    <td style="width: 10%" class="text-center"><?php echo $dados['concelhoId']?></td>
    <td style="width: 60%" class="text-center"><?php echo $dados['concelhoNome']?></td>
    <td class="text-center"><?php echo $dados['distritoNome'];?></td>
    <td class="text-center">
        <a href="editaConcelho.php?id=<?php echo $dados['concelhoId']?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
        <a href="eliminaConcelho.php?id=<?php echo $dados['concelhoId']?>" class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
    </td>
</tr>
<?php
}
?>