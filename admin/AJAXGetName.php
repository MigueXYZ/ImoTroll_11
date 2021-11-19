<?php
    $con=mysqli_connect("localhost","root","","2021imobiliaria");
    $id=intval($_POST['id']);
    $tabela=addslashes($_POST['table']);
    $campo=addslashes($_POST['field']);
    $sqlGetKey="show columns from $tabela where `Key` = 'PRI'";
    $result=mysqli_query($con,$sqlGetKey);
    $key=mysqli_fetch_array($result);
    $sql="select $campo from $tabela where ".$key['Field']." =$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados[$campo];
?>