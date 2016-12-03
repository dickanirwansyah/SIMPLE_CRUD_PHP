<!DOCTYPE html>
<html>
   
   <?php
   $host = "localhost";
   $user = "root";
   $password = "root";
   $database_name = "crud_mysqli";
   $koneksi = mysqli_connect($host, $user, $password, $database_name);
   if(mysqli_connect_error()){
       echo 'database gagal dikoneksikan !'.mysqli_connect_error();
   }
   
   if(isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM buku WHERE kd_buku='$id'";
       $load_byid = mysqli_query($koneksi, $query) or die(mysqli_error());
       if(mysqli_num_rows($load_byid) == 0){
           echo '<script>window.location.href=window.location.href();</script>';
       }else{
           $data = mysqli_fetch_array($load_byid);
       }
   }
   ?>
    
    <head>
        <meta charset="UTF-8">
        <title>UPDATE CRUD</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="page-header">
                        <h2>UPDATE CRUD</h2>
                    </div>
                    <form action="edit_proses.php" method="post">
                        <div class="form-group">
                            <label>kode buku :</label>
                            <input type="text" class="form-control" name="txtKode" value="<?php echo $data['kd_buku']?>" required="">
                        </div>
                        <div class="form-group">
                            <label>judul :</label>
                            <input type="text" class="form-control" name="txtJudul" value="<?php echo $data['judul']?>" required="">
                        </div>
                        <div class="form-group">
                            <label>penerbit :</label>
                            <select name="cboPenerbit" class="form-control" required="">
                                <option value="">-Pilih Salah Satu-</option>
                                <option value="gramedia1" <?php if($data['penerbit'] == 'gramedia1'){ echo 'selected';}?>>gramedia1</option>
                                <option value="gramedia2" <?php if($data['penerbit'] == 'gramedia2'){ echo 'selected';}?>>gramedia2</option>
                                <option value="gramedia3" <?php if($data['penerbit'] == 'gramedia3'){ echo 'selected';}?>>gramedia3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>jumlah :</label>
                            <input type="text" class="form-control" name="txtJumlah" value="<?php echo $data['jumlah']?>">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update" name="update">
                        <a href="index.php" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
