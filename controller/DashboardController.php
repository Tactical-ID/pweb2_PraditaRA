<?php
class DashboardController 
{
    public function dashboard()
    {
        header("location:http://localhost/KUA/index.php");
    }
    public function masuk()
    {
        header("location:http://localhost/KUA/Login.php");
    }

    public function cais()
    {
        header("location:http://localhost/KUA/views/cais/index.php");
    }

    public function cami()
    {
        header("location:http://localhost/KUA/views/cami/index.php");
    }

    public function penghulu()
    {
        header("location:http://localhost/KUA/views/penghulu/index.php");
    }
}
?>