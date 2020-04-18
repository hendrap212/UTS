<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <meta charset=utf-8>
    <meta name="viewport" constant="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dark-mode.css">
  <script src="jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <?php
    include 'function.php';
    ?>

    <?=template_header('Home')?>

    <div class="content">
      <h2></h2>
    </div>

	<div class="container">
  <h2 class="text-center">Edit Data Pegawai</h2> 
  <script src="js/dark-mode-switch.min.js"></script>
  <form action="update.php" method="POST">
    <?php
         include"conf/koneksi.php";
         if(isset($_GET['id'])){
            $sql=mysqli_query($con, "Select * from pegawai where ID_Peg='$_GET[id]'");
            $r=mysqli_fetch_array($sql);
    ?>
    <div class="form-group">
      <label for="ID_Peg">ID Pegawai :</label>
        <input type="int" class="form-control" id="ID_peg" name="ID_Peg" value="<?php echo $r['ID_Peg']; ?>" disabled >
        <input type="hidden" class="form-control" id="kode" name="kode" value="<?php echo $r['ID_Peg']; ?>"  >
    </div>
    <div class="form-group">
      <label for="text">Nama Pegawai :</label>
        <input type="text" class="form-control" id="text" placeholder="Masukkan Nama Pegawai"
        value="<?php echo $r['Nama_Peg']; ?> "name="Nama_Peg">
    </div>
    <div class="form-group">        
      <label class="control-label col-sm-2" for="Alamat">Alamat Pegawai :</label>
            <input type="text" class="form-control" id="text" placeholder="Masukkan Alamat Pegawai" 
            value=" <?php echo $r['Alamat']; ?>"name="Alamat">
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ID Departemen">Pilih ID Departemen:</label>
      <select class="control-label col-sm-2" id="sel1" name="ID_Dept">
        <?php
          include("conf/koneksi.php");
          $sql=mysqli_query($con,"Select * from Departemen");
          $r=mysqli_fetch_array($sql);
        ?>
        <?php
          while($r=mysqli_fetch_array($sql)){
              echo"<option value=$r[ID_Dept] > $r[Nama_Dept] </option>";
          }
        ?>
      </select> 
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <button class="text-center" type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
</div>

    <?php
        }
    ?>
</body>
</html>