<?php
if(isset($_POST['update'])){
    include './DBConnection.php';
    $kode = $_POST['txtKode'];
    $judul = $_POST['txtJudul'];
    $penerbit = $_POST['cboPenerbit'];
    $jumlah = $_POST['txtJumlah'];
    
    $query = "UPDATE buku SET judul='$judul', penerbit='$penerbit', jumlah='$jumlah' where kd_buku='$kode'";
    $update = mysqli_query($koneksi,$query) or die(mysqli_error());
    
    if($update){
        echo '<script>alert("data berhasil diupdate !");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }else{
        echo '<script>alert("data gagal diupdate !");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
}
?>

