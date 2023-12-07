<?php
require '../../index.php';

?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-3 py-3">
    <h4>Tambah Data Calon Suami</h4>
    <form action="proses_cami" method="post">
        <div>
            <label for="nama_cami" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_cami">
        </div>
        <div>
            <label for="no_ktp" class="form-label">No KTP</label>
            <input type="text" class="form-control" name="no_ktp">
        </div>
        <div>
            <label for="tpt_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tpt_lahir">
        </div>
        <div>
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir">
        </div>
        <div>
            <label for="alamat" class="form-label">Alamat</label>
            <br>
            <textarea name="alamat" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan">
        </div>
        <div>
            <label for="status_cami" class="form-label">Status</label>
            <select name="status_cami" class="form-control">
                <option value="">--Pilih Status--</option>
                <option value="Sudah pernah menikah">Sudah pernah menikah</option>
                <option value="Belum pernah menikah">Belum pernah menikah</option>
            </select>
        </div>
        <br>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"> <a class="btn btn-secondary" href="cami">Kembali</a><br>
    </form>
</div>
