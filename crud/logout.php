<?php
   session_start();
   session_destroy();

   $sql;
   if($sql){
    header('location: ../index.html');
   }else{
    header('location: ../index.html');
   }
?>
