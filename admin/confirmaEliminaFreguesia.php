<?php
include_once("includes/body.inc.php");
$sql = "delete from freguesias where freguesiaId = '" . $_POST['freguesiaId'] . "'";
mysqli_query($con, $sql);
header("location:listaFreguesias.php");
?>