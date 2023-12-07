<?php

include_once '../../config.php';
include_once '../../controller/PenghuluController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $penghuluController = new PenghuluController($db);
    $penghuluData = $penghuluController->getPenghuluById($id);

    if ($penghuluData) {
        if (isset($_POST['submit'])) {
            $nama_peng = $_POST['nama_peng'];
            $nip = $_POST['nip'];
            $alamat_peng = $_POST['alamat_peng'];
            $no_hp = $_POST['no_hp'];

            $result = $penghuluController->updatePenghulu($id, $nama_peng, $nip, $alamat_peng, $no_hp);

            if ($result) {
                header("location:penghulu");
            }
            else {
                header("location:edit_penghulu");
            }
        } 
    }
}
?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    <h3>Edit Data Penghulu</h3>
    <?php
    if ($penghuluData) {
    ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_peng" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_peng" value="<?php echo $penghuluData['nama_peng']; ?>">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" value="<?php echo $penghuluData['nip']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat_peng" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat_peng" value="<?php echo $penghuluData['alamat_peng']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp" value="<?php echo $penghuluData['no_hp']; ?>">
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary"> <a class="btn btn-secondary"href="penghulu">Kembali</a><br>
        </form>
    <?php
    }
    ?>
</div>
