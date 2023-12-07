<?php

class Cais{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    //menampilkan data calon istri
    public function getAllCais()
    {
        $query="SELECT * FROM calon_istri";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }
    public function createCais($nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat_cais, $pekerjaan_cais, $status_cais)
    {
        $query = "INSERT INTO calon_istri (nama_cais, wali, noktp_cais, tempat_lahir, tanggal_lahir, alamat_cais, pekerjaan_cais, status_cais )
        VALUES ('$nama_cais', '$wali', '$noktp_cais', '$tempat_lahir', '$tanggal_lahir', '$alamat_cais', '$pekerjaan_cais', '$status_cais')";
        $result = mysqli_query($this->koneksi,$query);

        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    public function getCaisById($id)
    {
        $query = "SELECT * FROM calon_istri where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateCais($id,$nama_cais, $wali, $noktp_cais, $tempat_lahir, $tanggal_lahir, $alamat_cais, $pekerjaan_cais, $status_cais)
    {
        $query = "UPDATE calon_istri SET nama_cais='$nama_cais', wali='$wali', noktp_cais='$noktp_cais', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat_cais='$alamat_cais', pekerjaan_cais='$pekerjaan_cais', status_cais='$status_cais' WHERE id = $id";
    
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteCais($id)
    {
        $query = "DELETE FROM calon_istri WHERE id = $id";
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