
<?php
include_once ("includes/body.inc.php");

$sql="delete from imoveltipos where imovelTipoId ='" .$_POST['tipoId']. "'";
mysqli_query($con,$sql);
header("location:listaTipos.php");

?>
