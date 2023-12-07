<?php

class Penghulu{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    //menampilkan data calon istri
    public function getAllPenghulu()
    {
        $query="SELECT * FROM penghulu";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }
    public function createPenghulu($nama_peng, $nip, $alamat_peng, $no_hp)
    {
        $query = "INSERT INTO penghulu (nama_peng, nip, alamat_peng, no_hp)
        VALUES ('$nama_peng', '$nip', '$alamat_peng', '$no_hp')";
        $result = mysqli_query($this->koneksi,$query);

        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    public function getPenghuluById($id)
    {
        $query = "SELECT * FROM penghulu where id_peng =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updatePenghulu($id, $nama_peng, $nip, $alamat_peng, $no_hp)
    {
        $query = "UPDATE penghulu SET nama_peng='$nama_peng', nip='$nip', alamat_peng='$alamat_peng', no_hp='$no_hp' WHERE id_peng = $id";
    
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deletePenghulu($id)
    {
        $query = "DELETE FROM penghulu WHERE id_peng = $id";
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