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
        <title>Operaciones</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>


    <div style="margin-top: 5px;margin-bottom: 40px" class="container">


        <div class="row" style="margin: 0px">
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


            <div class="col-md-3" style="background-color: antiquewhite;margin: 0px;padding: 5px">


                <div class="col-md-12">
                    <label for="desde">Desde:</label>
                    <input type="date" id="desde" class="form-control">

                </div>
                <div class="col-md-12">
                    <label for="hasta">Hasta:</label>
                    <input type="date" id="hasta" class="form-control">

                </div>
                <br>
                <div class="col-md-12">
                    <button onclick="buscar()" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Buscar
                    </button>
                </div>

                <div class="col-md-12">
                    <button onclick="buscar_reporte()" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Reporte
                    </button>
                </div>


            </div>

            <div class="row col-md-9" style="background-color: lightgoldenrodyellow;margin: 0px;padding: 5px">
                <div class="row col-md-12" style="padding: 0px;margin: 0px" id="arriba">
                    <div class="col-md-6">
                        <div id="dona" style="width: 100%; height: 350px;"></div>

                    </div>

                    <div class="col-md-6">
                        <div id="barras" style="width: 100%; height: 350px;"></div>
                    </div>

                    <div class="col-md-12">
                        <h1 id="nombre_banco"></h1>
                        <div id="rubritos_dona" style="width: 100%;height: 350px"></div>

                    </div>
                </div>
                <div id="abajo" class="row col-md-12" style="padding: 0px;margin: 0px;display: none">
                    <div class="col-md-12">
                        <label for="valor_en_caja_fecha">VALORES EN CAJA</label>
                        <input class="form-control" id="valor_en_caja_fecha" disabled readonly="readonly" type="text">
                        <br>
                        <button onclick="historial_caja_fecha()" wigth="100" style="margin-bottom: 5px"
                                type="button" class="btn btn-info form-control">
                            HISTORIAL CAJA
                        </button>
                    </div>
                    <div class="col-md-12" style="padding: 5px;margin: 0px;">
                        <!--<label for="tabla_valores_cuenta_totales">VALORES</label>
                        <table id="tabla_valores_cuenta_totales" class="table table-bordered table-striped"
                               style="width:100%">
                            <thead>
                            <tr style="background-color: orange;color: white">
                                <th>NOMBRE</th>
                                <th>ACRONIMO</th>
                                <th>TIPO</th>
                                <th>VALOR</th>
                                <th>COMISION</th>
                                <th>FECHA CREADA</th>
                                <th>HISTORIAL</th>

                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                        -->
                        <div class="table-responsive">
                            <label for="tabla_valores_cuenta_totales">VALORES</label>
                            <table id="tabla_valores_cuenta_totales" class="table table-bordered table-striped"
                                   style="width:100%">
                                <thead>
                                <tr style="background-color: orange;color: white">
                                    <th style="display: none">ID</th>
                                    <th>NOMBRE</th>
                                    <th>ACRONIMO</th>
                                    <th>SALDO</th>
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

    <!-- use the latest version -->
    <script lang="javascript" src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
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