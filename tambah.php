<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>INSERT CRUD</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="page-header">
                        <h2>INSERT CRUD</h2>
                    </div>
                    <form action="tambah.php" method="post">
                        <div class="form-group">
                            <label>kode buku :</label>
                            <input type="text" class="form-control" name="txtKode" required="">
                        </div>
                        <div class="form-group">
                            <label>judul :</label>
                            <input type="text" class="form-control" name="txtJudul" required="">
                        </div>
                        <div class="form-group">
                            <label>penerbit :</label>
                            <select name="cboPenerbit" class="form-control" required>
                                <option value="">-Pilih Salah Satu-</option>
                                <option value="gramedia1">gramedia1</option>
                                <option value="gramedia2">gramedia2</option>
                                <option value="gramedia3">gramedia3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>jumlah :</label>
                            <input type="text" class="form-control" name="txtJumlah"required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                        <a href="index.php" class="btn btn-danger">Kembali</a>
                    </form>
                    <?php
                    if(isset($_POST['simpan'])){
                        include './DBConnection.php';
                        $kode = $_POST['txtKode'];
                        $judul = $_POST['txtJudul'];
                        $penerbit = $_POST['cboPenerbit'];
                        $jumlah = $_POST['txtJumlah'];
                        
                        $query = "INSERT INTO buku (kd_buku, judul, penerbit, jumlah) values ('$kode', '$judul', '$penerbit', '$jumlah')";
                        $inser = mysqli_query($koneksi, $query) or die(mysqli_error());
                        
                        if($inser){
                            echo '<script>alert("data berhasil disimpan !");</script>';
                            echo '<script>window.location.href="index.php";</script>';
                        }else{
                            echo '<script>alert("data gagal disimpan !");</script>';
                            echo '<script>window.location.href="index.php";</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
