<?php
try{
    $conex = mysqli_connect('files.000webhost.com','id20993399_root','LuiNava1594_','id20993399_pasaporte_covid');

  } catch (Exception $e) {
    echo 'ERROR:'.$e->getMessage();
  }
?>