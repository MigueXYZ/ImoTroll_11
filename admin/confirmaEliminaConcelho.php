<?php
include_once("includes/body.inc.php");
$sql = "delete from concelhos where concelhoId = '" . $_POST['concelhoId'] . "'";
mysqli_query($con, $sql);
header("location:listaConcelhos.php");
?>