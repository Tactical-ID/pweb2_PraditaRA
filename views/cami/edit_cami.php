<?php
include_once '../../config.php';
include_once '../../controller/CamiController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $camiController = new CamiController($db);
    $camiData = $camiController->getCamiById($id);

    if ($camiData) {
        if (isset($_POST['submit'])) {
            $nama_cami = $_POST['nama_cami'];
            $no_ktp = $_POST['no_ktp'];
            $tpt_lahir = $_POST['tpt_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $alamat = $_POST['alamat'];
            $pekerjaan = $_POST['pekerjaan'];
            $status_cami = $_POST['status_cami'];

            $result = $camiController->updateCami($id, $nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami);

            if ($result) {
                header("location:cami");
            } else {
                header("location:edit_cami");
            }
        }
    }
}
?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    <h3>Edit Data Calon Suami</h3>
    <?php
    if ($camiData) {
    ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_cami" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_cami" value="<?php echo $camiData['nama_cami']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No KTP</label>
                <input type="text" class="form-control" name="no_ktp" value="<?php echo $camiData['no_ktp']; ?>">
            </div>
            <div class="mb-3">
                <label for="tpt_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tpt_lahir" value="<?php echo $camiData['tpt_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $camiData['tgl_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $camiData['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" value="<?php echo $camiData['pekerjaan']; ?>">
            </div>
            <div class="mb-3">
                <label for="status_cami" class="form-label">Status</label>
                <select name="status_cami" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="Sudah pernah menikah" <?php echo ($camiData['status_cami'] == 'Sudah pernah menikah') ? 'selected' : ''; ?>>Sudah pernah menikah</option>
                    <option value="Belum pernah menikah" <?php echo ($camiData['status_cami'] == 'Belum pernah menikah') ? 'selected' : ''; ?>>Belum pernah menikah</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">  <a class="btn btn-secondary"href="cami">Kembali</a><br>
        </form>
    <?php
    }
    ?>
</div>
