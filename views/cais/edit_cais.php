<?php
include_once '../../config.php';
include_once '../../controller/CaisController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $caisController = new CaisController($db);
    $caisData = $caisController->getCaisById($id);

    if ($caisData) {
        if (isset($_POST['submit'])) {
            // Check if form is submitted
            $nama_cais = $_POST['nama_cais'];
            $wali = $_POST['wali'];
            $noktp_cais = $_POST['noktp_cais'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $alamat_cais = $_POST['alamat_cais'];
            $pekerjaan_cais = $_POST['pekerjaan_cais'];
            $status_cais = $_POST['status_cais'];

            $result = $caisController->updateCais($id, $nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat_cais, $pekerjaan_cais, $status_cais);

            if ($result) {
                header("location:cais");
            } else {
                header("location:edit_cais");
            }
        }
    }
}
?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    <h3>Edit Data Calon Istri</h3>
    <?php
    if ($caisData) {
    ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_cais" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_cais" value="<?php echo $caisData['nama_cais']; ?>">
            </div>
            <div class="mb-3">
                <label for="wali" class="form-label">Wali</label>
                <input type="text" class="form-control" name="wali" value="<?php echo $caisData['wali']; ?>">
            </div>
            <div class="mb-3">
                <label for="noktp_cais" class="form-label">No KTP</label>
                <input type="text" class="form-control" name="noktp_cais" value="<?php echo $caisData['noktp_cais']; ?>">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $caisData['tempat_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $caisData['tanggal_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat_cais" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat_cais" value="<?php echo $caisData['alamat_cais']; ?>">
            </div>
            <div class="mb-3">
                <label for="pekerjaan_cais" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_cais" value="<?php echo $caisData['pekerjaan_cais']; ?>">
            </div>
            <div class="mb-3">
                <label for="status_cais" class="form-label">Status</label>
                <select name="status_cais" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="Sudah pernah menikah" <?php echo ($caisData['status_cais'] == 'Sudah pernah menikah') ? 'selected' : ''; ?>>Sudah pernah menikah</option>
                    <option value="Belum pernah menikah" <?php echo ($caisData['status_cais'] == 'Belum pernah menikah') ? 'selected' : ''; ?>>Belum pernah menikah</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">  <a class="btn btn-secondary"href="cais">Kembali</a><br>
        </form>
    <?php
    }
    ?>
</div>
