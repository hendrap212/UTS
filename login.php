<?php

 define("db_host", "localhost");
 define("db_user", "root");
 define("db_pass", "");
 define("db_name", "latihan2");
 
 $konek = mysqli_connect(db_host, db_user, db_pass, db_name);
//  cek koneksi ke database
//  if (!$konek){
//   die("Error!");
//  }
 
 $nama=$_POST['nama'];
 $password = $_POST['password'];
 
 
 $get_user = "SELECT * FROM user WHERE nama = '$nama'";
 $result = mysqli_query($konek,$get_user);
 $data = mysqli_fetch_array($result);
 if($data){
  if($password == $data['password']){
   Header("Location: crud/index.php");
  }
 }else{
   echo"Password/User salah";
 }
?>