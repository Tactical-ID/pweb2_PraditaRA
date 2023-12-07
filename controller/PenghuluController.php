<?php
//mengambil models Penghulu.php
include_once '../../models/Penghulu.php';

class PenghuluController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Penghulu($db);
    }
    
    public function getAllPenghulu()
    {
        return $this->model->getAllPenghulu(); 
    }

    public function createPenghulu($nama_peng, $nip, $alamat_peng, $no_hp)
    {
        return $this->model->createPenghulu($nama_peng, $nip, $alamat_peng, $no_hp);
    }

    public function getPenghuluById($id_peng)
    {
        return $this->model->getPenghuluById($id_peng);
    }

    public function updatePenghulu($id_peng, $nama_peng, $nip, $alamat_peng, $no_hp)
    {
        return $this->model->updatePenghulu($id_peng, $nama_peng, $nip, $alamat_peng, $no_hp);
    }

    public function deletePenghulu($id_peng)
    {
        return $this->model->deletePenghulu($id_peng);
    }
}
?>