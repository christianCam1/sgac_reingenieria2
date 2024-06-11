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
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="table table-responsive">
                                <table id="tablaAgenda" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Dias</th>
                                            <th scope="col">Tiempo</th>
                                            <th scope="col">Perros</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Nombre Perros</th>
                                            <th scope="col">Direccion</th>
                                            <th scope="col">Dias Eleccion</th>
                                            <th scope="col">Cambiar categoria</th>
                                            <th scope="col">Cambiar fechas</th>
                                            <th scope="col">Ubicacion</th>
                                            <th scope="col">Cambiar Ubicación</th>
                                            <th scope="col">Asignar</th>
                                            <th scope="col">Asignar Individual</th>
                                            <th scope="col">Eliminar paquete</th>
                                            <th scope="col">Ver compras</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla">
                                    </tbody>
                                </table>
                            </div>

                            <!-- <div class="form-group">
                <label for="datetimepicker1" id="datetimepicker1Label"> Fecha 1 :</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div> -->
                            <!-- Date and time -->
                            <div class="form-group">
                                <label for="datetimepicker1" id="datetimepicker1Label">Fecha 1:</label>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#datetimepicker1" />
                                    <div class="input-group-append" data-target="#datetimepicker1"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker2" id="datetimepicker2Label"> Fecha 2 :</label>
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker3" id="datetimepicker3Label"> Fecha 3 :</label>
                                <div class='input-group date' id='datetimepicker3'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker4" id="datetimepicker4Label"> Fecha 4 :</label>
                                <div class='input-group date' id='datetimepicker4'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker5" id="datetimepicker5Label"> Fecha 5:</label>
                                <div class='input-group date' id='datetimepicker5'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker6" id="datetimepicker6Label"> Fecha 6:</label>
                                <div class='input-group date' id='datetimepicker6'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker7" id="datetimepicker7Label"> Fecha 7:</label>
                                <div class='input-group date' id='datetimepicker7'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker8" id="datetimepicker8Label"> Fecha 8:</label>
                                <div class='input-group date' id='datetimepicker8'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker9" id="datetimepicker9Label"> Fecha 9:</label>
                                <div class='input-group date' id='datetimepicker9'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker10" id="datetimepicker10Label"> Fecha 10:</label>
                                <div class='input-group date' id='datetimepicker10'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker11" id="datetimepicker11Label"> Fecha 11 :</label>
                                <div class='input-group date' id='datetimepicker11'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker12" id="datetimepicker12Label"> Fecha 12 :</label>
                                <div class='input-group date' id='datetimepicker12'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker13" id="datetimepicker13Label"> Fecha 13 :</label>
                                <div class='input-group date' id='datetimepicker13'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker14" id="datetimepicker14Label"> Fecha 14 :</label>
                                <div class='input-group date' id='datetimepicker14'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker15" id="datetimepicker15Label"> Fecha 15:</label>
                                <div class='input-group date' id='datetimepicker15'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker16" id="datetimepicker16Label"> Fecha 16 :</label>
                                <div class='input-group date' id='datetimepicker16'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker17" id="datetimepicker17Label"> Fecha 17 :</label>
                                <div class='input-group date' id='datetimepicker17'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker18" id="datetimepicker18Label"> Fecha 18 :</label>
                                <div class='input-group date' id='datetimepicker18'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker19" id="datetimepicker19Label"> Fecha 19:</label>
                                <div class='input-group date' id='datetimepicker19'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker20" id="datetimepicker20Label"> Fecha 20 :</label>
                                <div class='input-group date' id='datetimepicker20'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker21" id="datetimepicker21Label"> Fecha 21 :</label>
                                <div class='input-group date' id='datetimepicker21'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker22" id="datetimepicker22Label"> Fecha 22 :</label>
                                <div class='input-group date' id='datetimepicker22'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker23" id="datetimepicker23Label"> Fecha 23 :</label>
                                <div class='input-group date' id='datetimepicker23'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker24" id="datetimepicker24Label"> Fecha 24 :</label>
                                <div class='input-group date' id='datetimepicker24'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker25" id="datetimepicker25Label"> Fecha 25:</label>
                                <div class='input-group date' id='datetimepicker25'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker26" id="datetimepicker26Label"> Fecha 26 :</label>
                                <div class='input-group date' id='datetimepicker26'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker27" id="datetimepicker27Label"> Fecha 27 :</label>
                                <div class='input-group date' id='datetimepicker27'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker28" id="datetimepicker28Label"> Fecha 28 :</label>
                                <div class='input-group date' id='datetimepicker28'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker29" id="datetimepicker29Label"> Fecha 29:</label>
                                <div class='input-group date' id='datetimepicker29'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetimepicker30" id="datetimepicker30Label"> Fecha 30 :</label>
                                <div class='input-group date' id='datetimepicker30'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="container mt-3">

                                <div class="d-flex mb-3">
                                    <div class="p-2 mr-auto "> <button id="cancelar"
                                            onclick="cancelar()">Cancelar</button> </div>
                                    <div class="p-2 "><button id="guardar" onclick="guardar()">Guardar</button></div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="paseo1" id="paseo1Label">Paseo 1</label>
                                <input type="text" class="form-control" id="paseo1"
                                    placeholder="Ingresa el paseador para el paseo 1" />
                            </div>

                            <div class="form-group">
                                <label for="paseo2" id="paseo2Label">Paseo 2</label>
                                <input type="text" class="form-control" id="paseo2"
                                    placeholder="Ingresa el paseador para el paseo 2" />
                            </div>

                            <div class="form-group">
                                <label for="paseo3" id="paseo3Label">Paseo 3</label>
                                <input type="text" class="form-control" id="paseo3"
                                    placeholder="Ingresa el paseador para el paseo 3" />
                            </div>

                            <div class="form-group">
                                <label for="paseo4" id="paseo4Label">Paseo 4</label>
                                <input type="text" class="form-control" id="paseo4"
                                    placeholder="Ingresa el paseador para el paseo 4" />
                            </div>

                            <div class="form-group">
                                <label for="paseo5" id="paseo5Label">Paseo 5</label>
                                <input type="text" class="form-control" id="paseo5"
                                    placeholder="Ingresa el paseador para el paseo 5" />
                            </div>

                            <div class="form-group">
                                <label for="paseo6" id="paseo6Label">Paseo 6</label>
                                <input type="text" class="form-control" id="paseo6"
                                    placeholder="Ingresa el paseador para el paseo 6" />
                            </div>

                            <div class="form-group">
                                <label for="paseo7" id="paseo7Label">Paseo 7</label>
                                <input type="text" class="form-control" id="paseo7"
                                    placeholder="Ingresa el paseador para el paseo 7" />
                            </div>

                            <div class="form-group">
                                <label for="paseo8" id="paseo8Label">Paseo 8</label>
                                <input type="text" class="form-control" id="paseo8"
                                    placeholder="Ingresa el paseador para el paseo 8" />
                            </div>

                            <div class="form-group">
                                <label for="paseo9" id="paseo9Label">Paseo 9</label>
                                <input type="text" class="form-control" id="paseo9"
                                    placeholder="Ingresa el paseador para el paseo 9" />
                            </div>

                            <div class="form-group">
                                <label for="paseo10" id="paseo10Label">Paseo 10</label>
                                <input type="text" class="form-control" id="paseo10"
                                    placeholder="Ingresa el paseador para el paseo 10" />
                            </div>

                            <div class="form-group">
                                <label for="paseo11" id="paseo11Label">Paseo 11</label>
                                <input type="text" class="form-control" id="paseo11"
                                    placeholder="Ingresa el paseador para el paseo 11" />
                            </div>

                            <div class="form-group">
                                <label for="paseo12" id="paseo12Label">Paseo 12</label>
                                <input type="text" class="form-control" id="paseo12"
                                    placeholder="Ingresa el paseador para el paseo 12" />
                            </div>

                            <div class="form-group">
                                <label for="paseo13" id="paseo13Label">Paseo 13</label>
                                <input type="text" class="form-control" id="paseo13"
                                    placeholder="Ingresa el paseador para el paseo 13" />
                            </div>

                            <div class="form-group">
                                <label for="paseo14" id="paseo14Label">Paseo 14</label>
                                <input type="text" class="form-control" id="paseo14"
                                    placeholder="Ingresa el paseador para el paseo 14" />
                            </div>

                            <div class="form-group">
                                <label for="paseo15" id="paseo15Label">Paseo 15</label>
                                <input type="text" class="form-control" id="paseo15"
                                    placeholder="Ingresa el paseador para el paseo 15" />
                            </div>

                            <div class="form-group">
                                <label for="paseo16" id="paseo16Label">Paseo 16</label>
                                <input type="text" class="form-control" id="paseo16"
                                    placeholder="Ingresa el paseador para el paseo 16" />
                            </div>

                            <div class="form-group">
                                <label for="paseo17" id="paseo17Label">Paseo 17</label>
                                <input type="text" class="form-control" id="paseo17"
                                    placeholder="Ingresa el paseador para el paseo 17" />
                            </div>

                            <div class="form-group">
                                <label for="paseo18" id="paseo18Label">Paseo 18</label>
                                <input type="text" class="form-control" id="paseo18"
                                    placeholder="Ingresa el paseador para el paseo 18" />
                            </div>

                            <div class="form-group">
                                <label for="paseo19" id="paseo19Label">Paseo 19</label>
                                <input type="text" class="form-control" id="paseo19"
                                    placeholder="Ingresa el paseador para el paseo 19" />
                            </div>

                            <div class="form-group">
                                <label for="paseo20" id="paseo20Label">Paseo 20</label>
                                <input type="text" class="form-control" id="paseo20"
                                    placeholder="Ingresa el paseador para el paseo 20" />
                            </div>

                            <div class="form-group">
                                <label for="paseo21" id="paseo21Label">Paseo 21</label>
                                <input type="text" class="form-control" id="paseo21"
                                    placeholder="Ingresa el paseador para el paseo 21" />
                            </div>

                            <div class="form-group">
                                <label for="paseo22" id="paseo22Label">Paseo 22</label>
                                <input type="text" class="form-control" id="paseo22"
                                    placeholder="Ingresa el paseador para el paseo 22" />
                            </div>

                            <div class="form-group">
                                <label for="paseo23" id="paseo23Label">Paseo 23</label>
                                <input type="text" class="form-control" id="paseo23"
                                    placeholder="Ingresa el paseador para el paseo 23" />
                            </div>

                            <div class="form-group">
                                <label for="paseo24" id="paseo24Label">Paseo 24</label>
                                <input type="text" class="form-control" id="paseo24"
                                    placeholder="Ingresa el paseador para el paseo 24" />
                            </div>

                            <div class="form-group">
                                <label for="paseo25" id="paseo25Label">Paseo 25</label>
                                <input type="text" class="form-control" id="paseo25"
                                    placeholder="Ingresa el paseador para el paseo 25" />
                            </div>

                            <div class="form-group">
                                <label for="paseo26" id="paseo26Label">Paseo 26</label>
                                <input type="text" class="form-control" id="paseo26"
                                    placeholder="Ingresa el paseador para el paseo 26" />
                            </div>

                            <div class="form-group">
                                <label for="paseo27" id="paseo27Label">Paseo 27</label>
                                <input type="text" class="form-control" id="paseo27"
                                    placeholder="Ingresa el paseador para el paseo 27" />
                            </div>

                            <div class="form-group">
                                <label for="paseo28" id="paseo28Label">Paseo 28</label>
                                <input type="text" class="form-control" id="paseo28"
                                    placeholder="Ingresa el paseador para el paseo 28" />
                            </div>

                            <div class="form-group">
                                <label for="paseo29" id="paseo29Label">Paseo 29</label>
                                <input type="text" class="form-control" id="paseo29"
                                    placeholder="Ingresa el paseador para el paseo 29" />
                            </div>

                            <div class="form-group">
                                <label for="paseo30" id="paseo30Label">Paseo 30</label>
                                <input type="text" class="form-control" id="paseo30"
                                    placeholder="Ingresa el paseador para el paseo 30" />
                            </div>

                            <div class="container mt-3">

                                <div class="d-flex mb-3">
                                    <div class="p-2 mr-auto "> <button id="cancelarAsignarPaseador"
                                            onclick="cancelarAsignarPaseador()">Cancelar</button> </div>
                                    <div class="p-2 "><button id="guardarAsignarPaseador"
                                            onclick="guardarAsignarPaseador()">Guardar</button></div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>



            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>7
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>

<script src="<?php echo $URL; ?>/app/controllers/agenda/agenda.js"></script>

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