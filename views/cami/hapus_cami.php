<?php

include_once '../../config.php';
include_once '../../controller/CamiController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $camiController = new CamiController($db);
    $result = $camiController->deleteCami($id);

    if ($result)
    {
        header("location:cami");
    }
    else {
        echo "Gagal menghapus";
    }
}
?>