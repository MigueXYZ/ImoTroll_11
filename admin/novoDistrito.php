<?php
include_once("includes/body.inc.php");
drawTop(DISTRITOS);
?>
    <div class="container"><h1>Novo Distrito</h1>
        <form action ="confirmaNovoDistrito.php" method="post">
            <div class="mb-3">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" name="nomeDistrito" class="form-control" id="distrito">
            </div>
            <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Cofirma"></div>
        </form>
<?php
drawBottom();
?>