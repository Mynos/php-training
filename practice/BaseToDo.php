<?php
 $mysqli = mysqli_connect("localhost","Lucho","lolo","todo");
 $res = mysqli_query($mysqli,"SELECT * from  usuario ");
 $row = mysqli_fetch_assoc($res);
 echo 'Todos los usuarios';
while ($row != NULL) {
    echo '<li>'.$row['Nombre'].' - '.$row['Apellido'].'</li>';
        echo "\n";
    $row = mysqli_fetch_assoc($res);
}
/**
 * 
 * @param type $nombre
 */
echo "<br>"; 
echo "Todas las tareas de Tincho";
function traer_tareas($nombre){
    global $mysqli;
    $res1 = mysqli_query($mysqli,"SELECT u.Nombre, u.Apellido, t.Nombre as Tarea from  usuario as u  INNER JOIN tareas as t ON u.Id_Usuario = t.Id_usuario where u.nombre ='$nombre' ");
    $row = mysqli_fetch_assoc($res1);
    while ($row != NULL) {
        echo '<li>'.$row['Nombre'].' - '.$row['Apellido'].' - '.$row['Tarea'].'</li>';
        echo "\n";
        
        $row = mysqli_fetch_assoc($res1);
        }
        
}
traer_tareas('Tincho');
    

 
 ?>


