<?php
    include_once ("includes/body.inc.php");
    drawTop(TIPOS);
    $sql="select * from imovelTipos";
    $result=mysqli_query($con,$sql);
?>
    <div class="container w-100">
    <h1>Lista de Tipos</h1>
    <table class="table table-striped table-hover text-center">
        <tr>
            <td colspan="4" align="right">
                <input type="input" onkeyup="mostra(<?php echo TIPOS?>,this.value)" class="btn-sm">
                <a href="novoTipo.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Tipo</a>
            </td>
        </tr>
        <tbody id="destino">

        </tbody>

    </table>
<?php
    drawBottom();
?>