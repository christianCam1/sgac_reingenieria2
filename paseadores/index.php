<?php
include('../layout/parte1.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de paseadores</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Paseadores registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="table table-responsive">
                                <table id="tablaDatos" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">UID (Hidden)</th>
                                            <th scope="col">UID</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">No.perros</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Celular</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Ultima vez</th>
                                            <th scope="col">Ultima vez (timestamp) </th>
                                            <th scope="col">Cierre</th>
                                            <th scope="col">Cierre (timestamp)</th>
                                            <th scope="col">Version</th>
                                            <th scope="col">Perfil</th>
                                        </tr>
                                    </thead>
                                    </thead>
                                    <tbody id="tabla">
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>

<script src="<?php echo $URL; ?>/app/controllers/paseadores/paseadores.js"></script>

<!-- Page specific script -->