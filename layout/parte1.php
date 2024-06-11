<?php
  // El valor de esta URL se cambia por el del dominio real
  // Este valor actual es solo para pruebas en entornos locales
  $URL = "http://localhost/sgac_reingenieria";
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="login/favicon.png">
    <title>SGA CaminanDog</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/40c8f442b2.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/toastr/toastr.min.css">
    <!-- InputMask -->
    <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/moment/locale/es-mx.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->

    <!-- jQuery -->
    <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

    <!-- GeoFire -->
    <script src="https://cdn.firebase.com/libs/geofire/4.1.0/geofire.min.js"></script>

    <!-- Archivo para conectarse a FireBase -->
    <script src="https://www.gstatic.com/firebasejs/5.8.5/firebase.js"></script>
    <script src="<?php echo $URL; ?>/app/init.js"></script>
    <script src="<?php echo $URL; ?>/app/controllers/login/validarRol.js"></script>

    <!-- Archivos agregados para pruebas de DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.1/css/responsive.bootstrap4.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.bootstrap4.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark text-sm">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" data-toggle="tooltip"
                        title="Comprimir/Contraer menu izquierda"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $URL; ?>/sgac_reingenieria/index.php" role="button"
                        data-toggle="tooltip" title="Inicio">
                        <i class="fa-sharp fa-solid fa-house"></i>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" id="darkModeButton" role="button" data-toggle="tooltip"
                        title="Cambiar modo oscuro">
                        <i class="fa-solid fa-moon" id="darkModeIcon"></i>
                    </a>
                    <script>
                    $(document).ready(function() {
                        // Evento click para el botón
                        $("#darkModeButton").click(function() {
                            // Verifica si el cuerpo tiene la clase "dark-mode"
                            if ($("body").hasClass("dark-mode")) {
                                // Si tiene la clase, la quita y cambia la clase del icono
                                $("body").removeClass("dark-mode");
                                $("#darkModeIcon").removeClass("fa-sun").addClass("fa-moon");
                                // Guarda el estado en el almacenamiento local
                                localStorage.setItem("darkModeEnabled", "false");
                            } else {
                                // Si no tiene la clase, la agrega y cambia la clase del icono
                                $("body").addClass("dark-mode");
                                $("#darkModeIcon").removeClass("fa-moon").addClass("fa-sun");
                                // Guarda el estado en el almacenamiento local
                                localStorage.setItem("darkModeEnabled", "true");
                            }
                        });

                        // Verifica si hay un estado guardado en el almacenamiento local
                        var darkModeEnabled = localStorage.getItem("darkModeEnabled");

                        // Si el modo oscuro estaba activado previamente, aplicarlo y cambiar la clase del icono
                        if (darkModeEnabled === "true") {
                            $("body").addClass("dark-mode");
                            $("#darkModeIcon").removeClass("fa-moon").addClass("fa-sun");
                        }
                    });
                    </script>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip"
                        title="Pantalla completa">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <!-- Brand Logo -->
            <a href="<?php $URL; ?>/sgac_reingenieria/index.php" class="brand-link">
                <!-- <img src="<?php echo $URL; ?>/public/images/activos.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">CaminanDog</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <!-- Muestra el usuario logeado en el sistema -->
                        <a href="#" class="d-block" id="user"></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-regular fa-calendar-days"></i>
                                <p>
                                    Agenda
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/agenda/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agenda</p>
                                    </a>
                                </li>
                                <li class="nav-item" id="agendaDevItem" style="display: none;">
                                    <a href="<?php echo $URL; ?>/agenda/agendaDev.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agenda Dev</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-user"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista de usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios/calificaciones.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calificaciones</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios/perros.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perros</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios/reporteVentas.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reporte</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios/estatusVentas.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estatus de ventas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/usuarios/contacto.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacto</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-dog"></i></i>
                                <p>
                                    Paseadores
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/paseadores" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista de paseadores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/paseadores/candidatos.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Candidatos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/paseadores/chatsActivosCandidatos.php"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chats Activos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/paseadores/calificacionInterna.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calificaciones Internas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/paseadores/altayBaja.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alta y baja</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-coins"></i>
                                <p>
                                    Finanzas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/almacen" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista de productos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/almacen/create.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar productos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-shield-dog"></i>
                                <p>
                                    Recuperandog
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista de proveedores</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <!--
                        <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                            Compras
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo $URL; ?>/compras/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de compras</p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="<?php echo $URL; ?>/compras/create.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agregar compras</p>
                            </a>
                            </li>
                        </ul>
                        </li>

                        <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo $URL; ?>/ventas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de ventas</p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="<?php echo $URL; ?>/ventas/create.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Realizar venta</p>
                            </a>
                            </li>
                        </ul>
                        </li> -->

                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ca0a0b" onclick="cerrarSesion()">
                                <i class="nav-icon fas fa-door-closed"></i>
                                <p>
                                    Cerrar Sesión
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>