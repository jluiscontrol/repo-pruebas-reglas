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
        <title>Usuarios</title>
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
            <p style="text-align: right"><?php
                date_default_timezone_set('America/Guayaquil');
                //$date = date('d-m-y h:i:s');
                $date = date('d-m-Y');
                echo $date; ?></p>
            <div class="col-md-6" style="background-color: antiquewhite">
                <div class="col">
                    <label for="id">Id:</label>
                    <input class="form-control" id="id" type="number" disabled readonly>
                </div>
                <div class="col">
                    <label for="nombres">Nombres</label>
                    <input class="form-control" id="nombres" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="apellidos_paternos">Apellidos paternos</label>
                    <input class="form-control" id="apellidos_paternos" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="apellidos_maternos">Apellidos maternos</label>
                    <input class="form-control" id="apellidos_maternos" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="usuario">Usuario</label>
                    <input class="form-control" id="usuario" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="clave">Clave</label>
                    <input class="form-control" id="clave" type="text" maxlength="50">
                </div>
                <div class="col">
                    <label for="tipo_cuenta">Tipo de cuenta:</label>

                    <select id="tipo_cuenta" class="form-control" name="state">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="ADM">ADMINISTRADOR</option>
                        <option value="EMP">EMPLEADO</option>
                    </select>
                </div>
                <br>
                <div class="col">
                    <label for="estado_cuenta">Estado de cuenta:</label>

                    <select id="estado_cuenta" class="form-control" name="state">
                        <option value="12345">--SELECCIONE UNA OPCION--</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br>
                <div class="col-sm-12 row" style="margin: 0px;padding: 0px">
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="limpiar_usuarios()" style="margin-bottom: 5px" type="button"
                                class="btn btn-danger form-control">
                            Limpiar
                        </button>
                    </div>
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="agregar_actualizar_usuario()" style="margin-bottom: 5px" type="button"
                                class="btn btn-primary form-control">
                            Agregar/Actualizar
                        </button>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table id="tabla_usuarios" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr style="background-color: orange;color: white">
                            <th style="display: none">ID</th>
                            <th style="display: none">USUARIO</th>
                            <th style="display: none">NOMBRES</th>
                            <th style="display: none">PATERNO</th>
                            <th style="display: none">MATERNO</th>
                            <th>NOMBRE</th>
                            <th>TIPO</th>
                            <th>ESTADO</th>
                            <th style="display: none">ESTADO NUMERO</th>


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
    <script src="js/md5.js"></script>
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