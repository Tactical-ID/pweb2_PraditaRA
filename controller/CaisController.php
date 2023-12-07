<?php
//mengambil models Cais.php
include_once '../../models/Cais.php';

class CaisController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Cais($db);
    }
    
    public function getAllCais()
    {
        return $this->model->getAllCais(); 
    }

    public function createCais($nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat, $pekerjaan_cais, $status_cais)
    {
        return $this->model->createCais($nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat, $pekerjaan_cais, $status_cais);
    }

    public function getCaisById($id)
    {
        return $this->model->getCaisById($id);
    }

    public function updateCais($id, $nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat, $pekerjaan_cais, $status_cais)
    {
        return $this->model->updateCais($id, $nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat, $pekerjaan_cais, $status_cais);
    }

    public function deleteCais($id)
    {
        return $this->model->deleteCais($id);
    }
}
?>