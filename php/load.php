<?php

$conexion= mysqli_connect("localhost","root","","plantilla");


$columns=['id_Producto', 'Nombre', 'Precio	' , 'Existencia'];

$table= "producto";

$id = 'id_Producto'

$campo= isset($_POST['campo']) ? $conexion-> real_escape_string($_POST['campo']): null;

$where = '';

if($campo != null){
    $where = "WHERE (";


    $cont = count($columns);
    for($i = 0; $i < $cont; $i++){
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }

    $where = substr_replace($where, "", -3);
    $where .= ")";
}

 //Limit
 $limit = isset($_POST['registros']) ? $conexion-> real_escape_string($_POST['registros']) : 10; 
 $pagina = isset($_POST['pagina']) ? $conexion-> real_escape_string($_POST['pagina']) : 0; 


 if(!$pagina){
    $inicio = 0;
    $pagina = 1;
 }else{
    $inicio = ($pagina - 1) * $limit;
 }

 $sLimit = "LIMIT $inicio , $limit";


//Consulta
$sql="SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . "
FROM $table
$where
$sLimit";
$resultado = $conexion->query($sql);
$num_rows = $resultado-> num_rows;

//Filtro para total de registros
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conexion->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalfiltro = $row_filtro[0];


$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $conexion->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistro = $row_total[0];

$output=[];
$output['totalRegistro'] = $totalRegistro;
$output['totalFiltros'] = $totalfiltro;
$output['data']= '';
$output['paginacion']= '';

if($num_rows>0){
    while($row= $resultado->fetch_assoc()){
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' .$row['Nombre']. '</td>';
        $output['data'] .= '<td>' .$row['Precio']. '</td>';
        $output['data'] .= '<td>' .$row['Existencia']. '</td>';
        $output['data'] .= '</tr>';
    }
}else{
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="3">Sin Resultados</td>';
    $output['data'] .= '<tr>';
}

echo json_encode($output JSON_UNESCAPED_UNICODE);
?>