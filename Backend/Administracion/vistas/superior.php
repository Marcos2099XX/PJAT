<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control escolar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <script src="https://kit.fontawesome.com/d8114ff3a8.js" crossorigin="anonymous"></script>
    

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Administración</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                <i class="fa-solid fa-square-check"></i>
                <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Paneles
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="alumnos.php">
                <i class="fa-solid fa-user"></i>    
                    <span>Alumnos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesores.php">
                <i class="fa-solid fa-user-tie"></i>    
                    <span>Profesores</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="grupos.php">
                <i class="fa-solid fa-user-group"></i>
                    <span>Grupos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="materias.php">
                <i class="fa-solid fa-book"></i>
                    <span>Materias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="horarios.php">
                <i class="fa-solid fa-clock"></i>
                    <span>Horarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="calificaciones.php">
                <i class="fa-solid fa-list"></i>    
                    <span>Calificaciones</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="eventos.php"> 
                <i class="fa-solid fa-calendar-days"></i>
                    <span>Eventos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            
                        </li>

                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                