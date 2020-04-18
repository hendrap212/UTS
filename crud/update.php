<?php

    include"conf/koneksi.php";
    if(isset($_POST['kode'])){
    $sql=mysqli_query($con,"UPDATE pegawai SET Nama_Peg='$_POST[Nama_Peg]',
                                                Alamat='$_POST[Alamat]',
                                                ID_Dept='$_POST[ID_Dept]'
                                                where ID_Peg='$_POST[kode]' ");
    $sql;                 
    if($sql){
        header('location: index.php');
    }else{
        echo"error";
    }
    
    }
?>