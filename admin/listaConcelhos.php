<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(CONCELHOS);
$sql="select concelhoId,concelhoNome, distritoNome from distritos inner join concelhos on distritoId = concelhoDistritoId where distritoId = concelhoDistritoId";
$result=mysqli_query($con,$sql);
?>
    <div class="container w-100">
        <h1>Lista de Concelhos</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="4" align="right">
                    <input type="input" onkeyup="mostra(<?php echo CONCELHOS?>,this.value)" class="btn-sm">
                    <a href="novoConcelho.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Concelho</a>
                </td>
            </tr>
            <tbody id="destino">

            </tbody>
        </table>




    </div>
<?php
drawBottom();
?>
