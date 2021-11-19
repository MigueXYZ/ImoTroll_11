
<?php
include_once ("includes/body.inc.php");

$sql="delete from imoveltipos where imovelTipoId ='" .$_GET['tipoId']. "'";
mysqli_query($con,$sql);
header("location:listaTipos.php");

?>
