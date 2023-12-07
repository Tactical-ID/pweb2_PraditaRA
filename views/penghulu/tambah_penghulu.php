<?php
require '../../index.php';
?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    <h4>Tambah Data Penghulu</h4>
    <form action="proses_penghulu" method="post">
        <div>
            <label for="nama_peng" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_peng">
        </div>
        <div>
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip">
        </div>
        <div>
            <label for="alamat_peng" class="form-label">Alamat</label>
            <br>
            <textarea name="alamat_peng" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" name="no_hp">
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Simpan"> <a class="btn btn-secondary"href="penghulu">Kembali</a><br>
    </form>
</div>
