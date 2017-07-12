<?php

$server     = 'localhost';
$user       = 'root';
$pass       = '';
$database   = 'bloob';

$con        = mysqli_connect($server, $user, $pass, $database);

$judul      = $_POST['judul'];

if(isset($_POST['simpan'])){
    if(!isset($_FILES['image'])){
        echo 'Pilih file gambar';
    }
    else
    {
        $image      = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);
        if($image_size == false){
            echo 'File yang anda pilih Bukan gambar';
        } else {
            if(!$insert = mysqli_query($con, "INSERT INTO gambar VALUES(NULL, '$judul','$image_name', '$image')")) {
                echo 'Gagal upload gambar';
            } else {
        // Informasi berhasil dan kembali ke inputan
                echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
            }
        }
    }
}

?>