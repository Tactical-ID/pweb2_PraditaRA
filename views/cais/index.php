<?php
include_once '../../config.php';
include_once '../../controller/CaisController.php';
require '../../index.php';

//intansiasi class database
$database=new database;
$db=$database->getKoneksi();

$caisController = new CaisController($db);
$cais = $caisController->getAllCais();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-5">
    <h3> Data Calon Istri </h3>
    <a class="btn btn-primary mb-3 mt-3" href="tambah_cais">Tambah Calon Istri</a>
    
    <table border="1" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Wali</th>
            <th>No KTP</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
$no = 1;
foreach($cais as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['nama_cais']?></td>
    <td><?php echo $x['wali']?></td>
    <td><?php echo $x['noktp_cais']?></td>
    <td><?php echo $x['tempat_lahir']?></td>
    <td><?php echo $x['tanggal_lahir']?></td>
    <td><?php echo $x['alamat_cais']?></td>
    <td><?php echo $x['pekerjaan_cais']?></td>
    <td><?php echo $x['status_cais']?></td>
    <td>
        <a class="btn btn-warning btn-sm"href="edit_cais?id=<?php echo $x['id'];?>">Edit</a>
        <a class="btn btn-danger btn-sm"href="hapus_cais?id=<?php echo $x['id'];?>"onclick="return confirm('Apakah yakin akan menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
