<?php

class Cami{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    //menampilkan data calon istri
    public function getAllCami()
    {
        $query="SELECT * FROM calon_suami";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }
    public function createCami($nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami)
    {
        $query = "INSERT INTO calon_suami (nama_cami, no_ktp, tpt_lahir, tgl_lahir, alamat, pekerjaan, status_cami )
        VALUES ('$nama_cami', '$no_ktp', '$tpt_lahir', '$tgl_lahir', '$alamat', '$pekerjaan', '$status_cami')";
        $result = mysqli_query($this->koneksi,$query);

        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    public function getCamiById($id)
    {
        $query = "SELECT * FROM calon_suami where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateCami($id, $nama_cami, $no_ktp, $tpt_lahir, $tgl_lahir, $alamat, $pekerjaan, $status_cami)
    {
        $query = "UPDATE calon_suami SET nama_cami='$nama_cami', no_ktp='$no_ktp', tpt_lahir='$tpt_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', pekerjaan='$pekerjaan', status_cami='$status_cami' WHERE id='$id'";
    
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteCami($id)
    {
        $query = "DELETE FROM calon_suami WHERE id = $id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }
}    