<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Poppins Font
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
     -->
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SILAPER</title>

    <!-- icon -->
    <link href="assets/img/kua.png" rel="icon" />
    <link href="assets/img/kua.png" rel="apple-touch-icon" />


    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />

    <style>
        /* body {
            font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
            background-color: #f8f9fa;
        } */

        .bg-light-green {
            background-color: #508D69; 
        }
    </style>

</head>

<body>
<div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-light-green sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-2">ADMIN SILAPER</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="dashboard" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-view-dashboard"></i>
        <span>Dashboard</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="cami" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="mdi mdi-human-male"></i>
        <span>Data Calon Suami</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="cais" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="mdi mdi-human-female"></i>
        <span>Data Calon Istri</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="penghulu" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="mdi mdi-account-tie"></i>
        <span>Data Penghulu</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="masuk" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
        <i class="mdi mdi-logout"></i>
        <span >Keluar</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
</li>
</ul>
</body>
</html>