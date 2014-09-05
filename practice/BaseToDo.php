<?php
$mysqli = mysqli_connect("localhost","Lucho","lolo","todo");
// $res = mysqli_query($mysqli,"SELECT * from  usuario ");
// $row = mysqli_fetch_assoc($res);
// echo 'Todos los usuarios';
//while ($row != NULL) {
//    echo '<li>'.$row['Nombre'].' - '.$row['Apellido'].'</li>';
//        echo "\n";
//    $row = mysqli_fetch_assoc($res);
//}
/**
 * 
 * @param type $nombre
 */

function traer_tareas($nombre){
    global $mysqli;
    $res1 = mysqli_query($mysqli,"SELECT u.Nombre, u.Apellido, t.Nombre as Tarea from  usuario as u  INNER JOIN tareas as t ON u.Id_Usuario = t.Id_usuario where u.nombre ='$nombre' ");
    $row = mysqli_fetch_assoc($res1);
    echo "<br>"; 
    echo "Todas las tareas de Tincho";
    while ($row != NULL) {
        echo '<li>'.$row['Nombre'].' - '.$row['Apellido'].' - '.$row['Tarea'].'</li>';
        echo "\n";
        
        $row = mysqli_fetch_assoc($res1);
        }
        
}
/**
 * 
 * @param type $nombre
 * @param type $apellido
 */
function insertar_chango($nombre,$apellido){
    global $mysqli;
    $res2 = mysqli_query($mysqli,"INSERT INTO usuario (Nombre, Apellido) VALUES('$nombre','$apellido')");
    if ($res2===TRUE){
        echo 'Se inserto el chango';
    }  else {
        echo 'ERROR: No Se inserto el chango';
    }
}

/**
 * 
 * @global type $mysqli
 * @param type $nombre
 * @param type $tiempo
 * @param type $estado
 * @param type $usuario
 */

function insertar_tarea_chango($nombre,$tiempo,$estado,$usuario){
    global $mysqli;
    $res3 = mysqli_query($mysqli,"INSERT INTO tareas (Nombre, TiempoEstimado,Estado,Id_usuario) VALUES('$nombre','$tiempo',$estado,$usuario)");
    if ($res3===TRUE){
        echo 'Se inserto la tarea chango';
    }  else {
        echo 'ERROR: No Se inserto la tarea';
    }
}
insertar_chango('Prueba', 'lolo');
insertar_tarea_chango('por favor anda', '2014-09-05 00:00:00', 0, 7);
traer_tareas('Tincho');
    

 
 ?>




