<?php
include_once ("includes/body.inc.php");

$table='imoveltipos';
$field='imovelTipoGenero';
function get_enum_values( $table, $field )
{
    global $con;
    $sql= "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'";
    $res=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($res);
    preg_match("/^enum\(\'(.*)\'\)$/", $dados['Type'], $matches);
    $enum = explode("','", $matches[1]);
    return $enum;
}

$valores=get_enum_values($table,$field);


foreach ($valores as $v){
    echo '<li>'.$v.'</li>';
}
?>