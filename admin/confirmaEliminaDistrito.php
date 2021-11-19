<?php
include_once("includes/body.inc.php");
$sql = "delete from distritos where distritoId = '" . $_POST['distritoId'] . "'";
mysqli_query($con, $sql);
header("location:listaDistritos.php");
?>