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
                    <h1 class="m-0">Listado de ususarios</h1>
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
                            <h3 class="card-title">Usuarios registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                           <div class="table table-responsive">
                           <table id="tablaDatos" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                   <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col" id="uidColumn">UID (Hidden)</th>
                                        <th scope="col">UID</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Ultima conexión</th>
                                        <th scope="col">Ultima conexión (timestamp)</th>
                                        <th scope="col">Fecha Registro </th>
                                        <th scope="col">Fecha Registro (timestamp) </th>
                                        <th scope="col">Version</th>
                                        <th scope="col">Perros</th>
                                        <th scope="col">Realizar venta</th>
                                        <th scope="col">Iniciar chat</th>
                                        <th scope="col">Ver compras</th>
                                    </tr>
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
    <!--Modal para mostrar los perros-->
    <div id="modalPerros" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-info text-light">
            <h5 class="modal-title" id="exampleModalLabel">Información Perros</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="table-responsive">
            <table id="tablaPerros" class="table table-bordered table-sm table-hover table-striped">
              <thead class="bg2">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Comportamiento</th>
                  <th scope="col">Raza</th>
                  <th scope="col">Desparacitado</th>
                  <th scope="col">Primera dosis</th>
                  <th scope="col">Segunda Dosis</th>
                  <th scope="col">Tercera Dosis</th>
                  <th scope="col">Foto</th>
                </tr>
              </thead>
              <tbody id="tablaPerrosbody" style="text-align:center">                
              </tbody>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" tabindex="2">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>

<script src="<?php echo $URL; ?>/app/controllers/users/users.js"></script>

<!-- Page specific script -->
<!-- <script>
  $(function() {
    $("#example1").DataTable({
      "pageLength": 5,
      language: {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 to 0 de 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      buttons: [{
          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',
          buttons: [{
            text: 'Copiar',
            extend: 'copy',
          }, {
            extend: 'pdf'
          }, {
            extend: 'excel'
          }, {
            text: 'Imprimir',
            extend: 'print',
          }]
        },
        {
          extend: 'colvis',
          text: 'Visor de Columnas',
          collecionLayout: 'fixed three-columns'
        }
      ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script> -->