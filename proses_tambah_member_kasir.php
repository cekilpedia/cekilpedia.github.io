<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['tlp'];
    if(empty($nama_member)){
        echo "<script>alert('nama memmber tidak boleh kosong');location.href='member_kasir.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='member_kasir.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis_kelamin tidak boleh kosong');location.href='member_kasir.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, jenis_kelamin, tlp) value ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$telp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='member_kasir.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='member_kasir.php';</script>";
        }
    }
}
?>
