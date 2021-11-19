<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$data = addslashes($_POST['txt']);
$sql = "select * from concelhos inner join freguesias on concelhoId = freguesiaConcelhoId where freguesiaNome like '%$data%'";


$result=mysqli_query($con,$sql);
?>
<tr>
    <th style="width: 10%" class="text-center">
        Id
    </th>
    <th style="width: 50%" class="text-center">
        Nome
    </th>
    <th style="width: 20%" class="text-center">
        Concelho
    </th>
    <th class="text-center">
        Opções
    </th>
</tr>
<?php


while ($dados=mysqli_fetch_array($result)) {
?>
<tr>
    <td class="text-center"><?php echo $dados['freguesiaId']?></td>
    <td class="text-center"><?php echo $dados['freguesiaNome']?></td>
    <td class="text-center"><?php echo $dados['concelhoNome'];?></td>
    <td class="text-center">
        <a href="editaFreguesia.php?id=<?php echo $dados['freguesiaId']?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
        <a href="eliminaFreguesia.php?id=<?php echo $dados['freguesiaId']?>" class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
    </td>
</tr>
<?php
}
?>