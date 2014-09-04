<?php
 $mysqli = mysqli_connect("localhost","Lucho","lolo","todo");
 $res = mysqli_query($mysqli,"SELECT * from  usuario ");
  $row = mysqli_fetch_assoc($res);
 
  while ($row != NULL) {
    echo '<pre>'.var_dump($row).'</pre>';
    echo "\n";
    $row = mysqli_fetch_assoc($res);
}
     
    

 
 ?>

