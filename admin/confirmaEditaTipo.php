
<?php
include_once ("includes/body.inc.php");

$sql="update `imoveltipos` set `imovelTipoNome` = '".$_POST['nomeTipo']."', `imovelTipoGenero`= '".$_POST['generoTipo']."' where imovelTipoId ='" .$_POST['tipoId']. "'";
mysqli_query($con,$sql);
header("location:listaTipos.php");

?>
