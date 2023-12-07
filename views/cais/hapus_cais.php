<?php

include_once '../../config.php';
include_once '../../controller/CaisController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $caisController = new CaisController($db);
    $result = $caisController->deleteCais($id);

    if ($result)
    {
        header("location:cais");
    }
    else {
        echo "Gagal menghapus";
    }
}
?>