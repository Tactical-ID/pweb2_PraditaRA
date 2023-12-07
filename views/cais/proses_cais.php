<?php

include_once '../../config.php';
include_once '../../controller/CaisController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_cais = $_POST['nama_cais'];
    $wali = $_POST['wali'];
    $noktp_cais = $_POST['noktp_cais'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat_cais = $_POST['alamat_cais'];
    $pekerjaan_cais = $_POST['pekerjaan_cais'];
    $status_cais = $_POST['status_cais'];

    $caisController = new CaisController($db);
    $result = $caisController->createCais ($nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat_cais, $pekerjaan_cais, $status_cais);

    if ($result) {
        header('location:cais');
    }
    else {
        header('location:tambah_cais');
    }
}
?>