<?php
if(isset($_GET['id'])){
    include './DBConnection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM buku WHERE kd_buku='$id'";
    $delete = mysqli_query($koneksi, $query) or die(mysqli_error());
    
    if($delete){
        echo '<script>alert("data berhasil disimpan !");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }else{
        echo '<script>alert("data gagal disimpan !");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
}
?>

