<?php
//mengambil models Cami.php
include_once '../../models/Cami.php';

class CamiController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Cami($db);
    }
    
    public function getAllCami()
    {
        return $this->model->getAllCami(); 
    }

    public function createCami($nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami)
    {
        return $this->model->createCami($nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami);
    }

    public function getCamiById($id)
    {
        return $this->model->getCamiById($id);
    }

    public function updateCami($id, $nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami)
    {
        return $this->model->updateCami($id, $nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami);
    }

    public function deleteCami($id)
    {
        return $this->model->deleteCami($id);
    }
}
?>