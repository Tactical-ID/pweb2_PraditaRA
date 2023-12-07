<?php
require '../../index.php';

?>


<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    
    <h4>Tambah Data Calon Istri</h4>
    <form action="proses_cais" method="post">
        <div>
            <label for="nama_cais" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_cais">
        </div>
        <div>
            <label for="wali" class="form-label">Wali</label>
            <input type="text" class="form-control" name="wali">
        </div>
        <div>
            <label for="noktp_cais" class="form-label">No KTP</label>
            <input type="text" class="form-control" name="noktp_cais">
        </div>
        <div>
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir">
        </div>
        <div>
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir">
        </div>
        <div>
            <label for="alamat_cais" class="form-label">Alamat</label>
            <br>
            <textarea name="alamat_cais" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="pekerjaan_cais" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_cais">
        </div>
        <div>
            <label for="status_cais" class="form-label">Status</label>
            <select name="status_cais" class="form-control">
                <option value="">--Pilih Status--</option>
                <option value="Sudah pernah menikah">Sudah pernah menikah</option>
                <option value="Belum pernah menikah">Belum pernah menikah</option>
            </select>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Simpan">  <a class="btn btn-secondary"href="cais">Kembali</a><br>
    </form>
</div>
