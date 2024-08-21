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
        <title>Movimientos</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>
    <input type="hidden" id="ocultar_reporte">

    <div style="margin-top: 40px;margin-bottom: 40px" class="container">


        <div class="row" style="width: 100%;display: flex;margin: 0px">
            <div class="col-md-12 row">
                <div class="col-md-6">
                    <p style="text-align: left">Bienvenido: <?php echo "{$_SESSION["nombres"]}" ?></p>
                </div>
                <div class="col-md-6">
                    <p style="text-align: right"><?php
                        date_default_timezone_set('America/Guayaquil');
                        //$date = date('d-m-y h:i:s');
                        $date = date('d-m-Y');
                        echo $date; ?></p>
                </div>
            </div>
            <div class="col-md-4" style="background-color: antiquewhite">


                <div class="col">
                    <label for="entidad_banco_select">Entidad/banco:</label>

                    <select onchange="cambio_select_banco(this)" id="entidad_banco_select" class="form-control">


                    </select>
                </div>

                <div class="col">
                    <label for="tipo_transaccion_movimientos">Tipo de transaccion:</label>

                    <select id="tipo_transaccion_movimientos" class="form-control">

                    </select>
                </div>


                <div class="col">
                    <label for="valor">Valor:</label>

                    <input value="0.00" onfocus="al_final(this)" class="form-control" step=".01" id="valor"
                           type="number">

                </div>

                <div class="col">
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" id="comentario" rows="4" maxlength="200"></textarea>
                </div>
                <br>

                <div class="col-sm-12">
                    <button onclick="agregar_transaccion_historial_movimiento()" wigth="100" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Guardar
                    </button>
                </div>

            </div>

            <div class="row col-md-8">
                <div class="col-md-12">
                    <label for="valor_en_caja">VALORES EN CAJA</label>
                    <input class="form-control" id="valor_en_caja" disabled readonly="readonly" type="text">
                    <br>
                    <button onclick="historial_caja()" wigth="100" style="margin-bottom: 5px"
                            type="button" class="btn btn-info form-control">
                        HISTORIAL CAJA
                    </button>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <label for="tabla_valores_cuenta">VALORES EN CUENTA</label>
                        <table id="tabla_valores_cuenta" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr style="background-color: orange;color: white">
                                <th style="display: none">ID</th>
                                <th>NOMBRE</th>
                                <th>ACRONIMO</th>
                                <th>VALOR</th>
                                <th>SOBRE GIRO</th>
                                <th>COMISION</th>
                                <th>HISTORIAL</th>


                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>

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
    <script type="text/javascript" charset="utf8"
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js">
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
?>