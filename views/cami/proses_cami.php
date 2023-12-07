<?php

include_once '../../config.php';
include_once '../../controller/CamiController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_cami = $_POST['nama_cami'];
    $no_ktp= $_POST['no_ktp'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $status_cami = $_POST['status_cami'];

    $camiController = new CamiController($db);
    $result = $camiController->createCami ($nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami);

    if ($result) {
        header('location:cami');
    }
    else {
        header('location:tambah_cami');
    }
}
?>