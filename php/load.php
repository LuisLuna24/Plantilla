<?php

$conexion= mysqli_connect("localhost","root","","plantilla");


$columns=['Nombre', 'Precio	' , 'Existencia'];

$table= "producto";

$campo= isset($_POST['campo']) ? $conexion-> real_escape_string($_POST['campo']): null;



$sql="SELECT * FROM $table";



$resultado = $conexion->query($sql);
$num_rows = $resultado-> num_rows;

$html='';

if($num_rows>0){
    while($row= $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>' .$row['Nombre']. '</td>';
        $html .= '<td>' .$row['Precio']. '</td>';
        $html .= '<td>' .$row['Existencia']. '</td>';
        $html .= '</tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="3">Sin Resultados</td>';
    $html .= '<tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>