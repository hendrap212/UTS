<?php

    //echo $_POST['kode'];

    include"conf/koneksi.php";
    if(isset($_GET['id'])){
    $sql=mysqli_query($con,"DELETE from pegawai where ID_Peg='$_GET[id]' ");
    $sql;                 
    if($sql){
        header('location: index.php');
    }else{
        echo"error";
    }
    
    }
?>