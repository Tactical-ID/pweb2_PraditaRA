<?php

include_once '../../config.php';
include_once '../../controller/PenghuluController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $penghuluController = new PenghuluController($db);
    $result = $penghuluController->deletePenghulu($id);

    if ($result)
    {
        header("location:penghulu");
    }
    else {
        echo "Gagal menghapus";
    }
}
?>