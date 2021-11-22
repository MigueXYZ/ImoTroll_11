<?php
include_once("includes/body.inc.php");
$id=$_POST['id'];
$tabela=$_POST['table'];
global $con;
$sqlGetKey="show columns from $tabela where `Key` = 'PRI'";
$result=mysqli_query($con,$sqlGetKey);
$key=mysqli_fetch_array($result);

$sql = "delete from $tabela where ".$key['Field']." = $id";
var_dump($sql);

mysqli_query($con, $sql);
?>