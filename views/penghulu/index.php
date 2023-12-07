<?php
include_once '../../config.php';
include_once '../../controller/PenghuluController.php';
require '../../index.php';

//intansiasi class database
$database=new database;
$db=$database->getKoneksi();

$penghuluController = new PenghuluController($db);
$penghulu = $penghuluController->getAllPenghulu();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="px-5">
    <h3> Data Penghulu </h3>
    <a class="btn btn-primary mb-3 mt-3" href="tambah_penghulu">Tambah Penghulu</a>
    <table border="1" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th>Aksi</th>
        </tr>
        <?php
$no = 1;
foreach($penghulu as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['nama_peng']?></td>
    <td><?php echo $x['nip']?></td>
    <td><?php echo $x['alamat_peng']?></td>
    <td><?php echo $x['no_hp']?></td>
    <td>
        <a class="btn btn-warning btn-sm"href="edit_penghulu?id=<?php echo $x['id_peng'];?>">Edit</a>
        <a class="btn btn-danger btn-sm"href="hapus_penghulu?id=<?php echo $x['id_peng'];?>"onclick="return confirm('Apakah yakin akan menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
