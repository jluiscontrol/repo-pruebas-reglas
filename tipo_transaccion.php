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
        <title>Tipo de transacciones</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>


    <div style="margin-top: 40px;margin-bottom: 40px" class="container">

        <input type="hidden" id="solo_entidades_operaciones">
        <input type="hidden" id="tipo_transacciones_oculto">
        <div class="row col-md-12">
            <p style="text-align: right">Bienvenido: <?php echo "{$_SESSION["nombres"]}" ?></p>
            <div class="col-md-6" style="background-color: antiquewhite">

                <div class="col">
                    <label for="id">Id:</label>
                    <input class="form-control" id="id" type="number" disabled readonly>
                </div>
                <div class="col">
                    <label for="nombre_transaccion">Nombre:</label>
                    <input class="form-control" id="nombre_transaccion" type="text">
                </div>
                <div class="col">
                    <label for="caja">AFECTA CAJA:</label>

                    <select id="caja" class="form-control">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="SUMA">SUMA A LA CAJA</option>
                        <option value="RESTA">RESTA A LA CAJA</option>
                        <option value="NO">NO AFECTA A LA CAJA</option>

                    </select>
                </div>
                <div class="col">
                    <label for="cuenta">AFECTA CUENTA:</label>

                    <select id="cuenta" class="form-control">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="SUMA">SUMA A LA CUENTA</option>
                        <option value="RESTA">RESTA A LA CUENTA</option>
                        <option value="NO">NO AFECTA A LA CUENTA</option>

                    </select>
                </div>

                <!--
                <div class="col">
                    <label for="mostrar">MOSTRAR A :</label>

                    <select id="mostrar" class="form-control">
                        <option value="0">--SELECCIONE UNA OPCION--</option>
                        <option value="ADM">ADMINISTRADOR</option>
                        <option value="EMP">EMPLEADO</option>
                        <option value="AMB">AMBOS</option>

                    </select>
                </div>
                -->


                <br>

                <div class="col-sm-12 row" style="margin: 0px;padding: 0px">
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="limpiar_tipo_transaccion()" style="margin-bottom: 5px" type="button"
                                class="btn btn-danger form-control">
                            Limpiar
                        </button>
                    </div>
                    <div class="col-sm-6" style="margin: 0px;padding: 0px">
                        <button onclick="agregar_actualizar_tipo_transaccion()" style="margin-bottom: 5px" type="button"
                                class="btn btn-primary form-control">
                            Agregar/Actualizar
                        </button>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table id="tabla_tipos_transaccion" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr style="background-color: orange;color: white">
                            <th style="display: none">ID</th>
                            <th>NOMBRE</th>
                            <th>AFECTA CAJA</th>
                            <th>AFECTA CUENTA</th>


                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-md-6" style="background-color: antiquewhite">
                <div class="col-md-12"
                ">
                <label for="id_afecta">Id:</label>
                <input class="form-control" id="id_afecta" type="number" disabled readonly>
            </div>
            <div class="col-md-12">
                <label for="entidad_banco_select">Entidad/banco:</label>

                <select id="entidad_banco_select" class="form-control">


                </select>
            </div>
            <div class="col">
                <label for="tipo_comision">Valor/Porcentaje:</label>

                <select onchange="cambio_select_tipo_comision(this)" id="tipo_comision" class="form-control">
                    <option value="0">--SELECCIONE UNA OPCION--</option>
                    <option value="VALOR">VALOR</option>
                    <option value="PORCENTAJE">PORCENTAJE</option>

                </select>
            </div>
            <div class="col">
                <label for="valor_porcentaje">Ingrese valor o porcentaje:</label>
                <input disabled class="form-control" id="valor_porcentaje" type="number">
            </div>
            <br>
            <div class="col-md-12" style="margin: 0px;padding: 0px">
                <button onclick="agregar_actualizar_entidad_x_rubro()" style="margin-bottom: 5px" type="button"
                        class="btn btn-primary form-control">
                    Agregar/Actualizar
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table id="tabla_entidades_afectadas_x_tipo_transaccion"
                       class="table table-bordered table-striped" style="width:100%">
                    <thead>
                    <tr style="background-color: orange;color: white">
                        <th style="display: none">ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO</th>
                        <th>VALOR/PORCENTAJE</th>
                        <th>ACCION</th>
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

    header('Location: ' . $link . 'login.php');
}
?><?php
