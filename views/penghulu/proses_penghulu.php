<?php

include_once '../../config.php';
include_once '../../controller/PenghuluController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_peng = $_POST['nama_peng'];
    $nip= $_POST['nip'];
    $alamat_peng = $_POST['alamat_peng'];
    $no_hp = $_POST['no_hp'];

    $penghuluController = new PenghuluController($db);
    $result = $penghuluController->createPenghulu ($nama_peng, $nip, $alamat_peng, $no_hp);

    if ($result) {
        header('location:penghulu');
    }
    else {
        header('location:tambah_penghulu');
    }
}
?>