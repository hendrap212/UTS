<?php

    include"conf/koneksi.php";
    if(isset($_POST['ID_Peg'])){
    $sql=mysqli_query($con,"insert into pegawai (ID_Peg,Nama_Peg,Alamat,ID_Dept)
                        values ('$_POST[ID_Peg]','$_POST[Nama_Peg]','$_POST[Alamat]','$_POST[ID_Dept]')");
    $sql;                 
    if($sql){
        header('location: index.php');
    }else{
        echo"error";
    }
    
    }
?>