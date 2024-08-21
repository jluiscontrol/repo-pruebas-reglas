<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'complementos/tmp.php';
session_start();
if (isset($_SESSION["nombres"])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Entidades</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>


    <div style="margin-top: 40px;margin-bottom: 40px" class="container">


        <div class="row" style="width: 100%;display: flex;margin: 0px">
            <p style="text-align: right">Bienvenido: <?php echo "{$_SESSION["nombres"]}" ?></p>
            <div class="col-md-6" style="background-color: antiquewhite">
                <div class="col">
                    <label for="id">Id:</label>
                    <input class="form-control" id="id" type="number" disabled readonly>
                </div>
                <div class="col">
                    <label for="nombre_banco">Nombre del banco:</label>
                    <input class="form-control" id="nombre_banco" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="acronimo">Acrónimo:</label>
                    <input class="form-control" id="acronimo" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="comision">Comisión:</label>
                    <input class="form-control" value="0.25" id="comision" type="number">
                </div>
                <div class="col">
                    <label for="sobre_giro">Sobre giro:</label>
                    <input class="form-control" value="0.00" onfocus="al_final(this)" id="sobre_giro" type="number">
                </div>
                <!--<div class="col">
                    <label for="mostrar">Mostrar a:</label>

                    <select id="mostrar" class="form-control">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="ADM">ADMINISTRADOR</option>
                        <option value="EMP">EMPLEADO</option>
                        <option value="AMB">AMBOS</option>

                    </select>
                </div>
                <div class="col">
                    <label for="tipo">Tipo:</label>

                    <select id="tipo" class="form-control">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="CUE">CUENTA</option>
                        <option value="CAJ">CAJA</option>


                    </select>
                </div>
                -->
                <br>
                <div class="col-sm-12 row" style="margin: 0px;padding: 0px">
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="limpiar()" style="margin-bottom: 5px" type="button"
                                class="btn btn-danger form-control">
                            Limpiar
                        </button>
                    </div>
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="agregar_actualizar_entidad()" style="margin-bottom: 5px" type="button"
                                class="btn btn-primary form-control">
                            Agregar/Actualizar
                        </button>
                    </div>

                </div>
                <div class="col-sm-12">
                    <button onclick="eliminar_entidad()" style="margin-bottom: 5px;background-color: red !important;" type="button"
                            class="btn btn-danger form-control">
                      ELIMINAR
                    </button>
                </div>

            </div>

            <div class="col-md-6" >
                <div class="table-responsive">
                    <table id="tabla_entidades" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr style="background-color: orange;color: white">
                            <th style="display: none">ID</th>
                            <th>NOMBRE</th>
                            <th>ACRONIMO</th>
                            <th>COMISION</th>
                            <th>SOBRE GIRO</th>

                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <?php
    /*include 'marcaweb.php';*/
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

    </script>
    <script src="js/js.js"></script>


    </body>
    </html>
    <?php
    include 'modal.php';
    ?>
    <?php
} else {
    include 'complementos/link.php';

    header('Location: '.$link.'login.php');
}
?>