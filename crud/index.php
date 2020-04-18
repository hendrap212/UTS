<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Pegawai</title>
    <meta charset=utf-8>
    <meta name="viewport" constant="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/dark-mode.css">
  <script src="jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body> 
    <!-- menghubungkan ke database -->
    <?php
    	include"conf/koneksi.php";
    	$tampil=mysqli_query($con,"Select * from pegawai");
      ?>

  <!-- membuat header -->
  <?php
  include 'function.php';
  ?>
  <?=template_header('Home')?>
  <div class="container">
    <h2 class="text-right"></h2>
  </div>
<!-- konten -->
<div class="container">
  <table class="table">
  <div class="jarak"><a href="add.php"><button type='button' class='btn btn-info' >Tambah Data Pegawai</button></div>
    <thead class="thead-dark"> 
      <script src="js/dark-mode-switch.min.js"></script>
      <tr>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Alamat</th>
        <th>Id Departemen</th> 
        <th>Nama Departemen</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <div >
      <?php
         while($r=mysqli_fetch_array($tampil)) {
         	echo"<tr>
         				<td>$r[ID_Peg]</td>
         				<td>$r[Nama_Peg]</td>";

       			        $datakategori=mysqli_query($con, "Select * from Departemen where ID_Dept='$r[ID_Dept]'");
       			        $r2=mysqli_fetch_array($datakategori);

         	echo" <td>$r[Alamat]</td>
         				<td>$r[ID_Dept]</td>
         				<td>$r2[Nama_Dept]</td>
                        <td>";
        ?>
           <a href=<?php echo 'edit.php?id=' . $r["ID_Peg"] ?> >
           <button type='button' class='btn btn-primary'>Edit</button>
           </a>
           <a href=<?php echo 'delete.php?id=' . $r["ID_Peg"] ?> >
           <button type='button' class='btn btn-danger'>Hapus</button>
           </a>
            </td></tr>
    <?php
         }
        ?>
      </div>
        
        
    </tbody>
    
  </table>
  
</div>


</body>
</html>