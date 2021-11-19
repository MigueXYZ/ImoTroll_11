<?php
include_once ("includes/body.inc.php");
drawTop(IMOVEIS);
$sql="select * from imoveis inner join freguesias on imoveis.imovelFreguesiaId=freguesias.FreguesiaId inner join imoveltipos on imoveis.imovelImovelTipoId = imoveltipos.imovelTipoId";
$result=mysqli_query($con,$sql);
?>
    <div class="container w-100">
    <h1>Lista de Imoveis</h1>
    <table class="table table-striped table-hover text-center">
        <tr>
            <td colspan="7" align="right">
                <input type="input" onkeyup="mostra(<?php echo IMOVEIS?>,this.value)" class="btn-sm">
                <a href="novoImovel.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Imovel</a>
            </td>
        </tr>
        <tbody id="destino">

        </tbody>
    </table>
<?php
drawBottom();
?>