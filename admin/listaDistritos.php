<?php

    include_once ("includes/body.inc.php");
    global $con;
    drawTop(DISTRITOS);
    $sql="select * from distritos";
    $result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Lista de distritos</h1>

        <table class="table table-striped table-hover text-center">
            <tr>
                <td colspan="3" align="right">
                    <input type="input" onkeyup="mostra(<?php echo DISTRITOS?>,this.value)" class="btn-sm">
                    <a href="novoDistrito.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Distrito</a>
                </td>
            </tr>
            <tbody id="destino">

            </tbody>

        </table>

        
    </div>

<?php
    drawBottom();
?>