<?php
/**
* la funcion guess devuelve la diferencia en minutos la diferencia entre la fecha del sistema y la fecha pasada por parametro 
* 
*@param $date an String  that represent a date, format: M/D/YYYY HH:ii
*/
function guess($date)
{
  
  $today = date_create('now');
  $date1 = date_create($date);
  $today = date_timestamp_get($today); //$today to seconds
  $date1 = date_timestamp_get($date1); // $date1 to seconds
  $interval = ($today - $date1) / 60;
  return $interval;
}
//usage
 echo guess('10/10/2014 19:49');