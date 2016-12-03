<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="page-header">
                        <h2>CRUD</h2>
                    </div>
                    <a href="tambah.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>Tambah Data</a>
                    <div class="page-header">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>no</td>
                                    <td>kode buku</td>
                                    <td>judul</td>
                                    <td>penerbit</td>
                                    <td>jumlah</td>
                                    <td>opsi</td>
                                </tr>
                            <tbody>
                                <?php
                                include './DBConnection.php';
                                $no=1;
                                $load = mysqli_query($koneksi, "select * from buku") or die(mysqli_error());
                                while($data = mysqli_fetch_array($load)){
                                ?>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $data['kd_buku']?></td>
                                    <td><?php echo $data['judul']?></td>
                                    <td><?php echo $data['penerbit']?></td>
                                    <td><?php echo $data['jumlah']?></td>
                                    <td>
                                        <a class="btn btn-primary" href="edit.php?id=<?php echo $data['kd_buku']?>">edit</a>
                                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['kd_buku']?>"onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">hapus</a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                ?>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
