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
        <title>Arqueo</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>


    <div style="margin-top: 5px;margin-bottom: 40px" class="container">

        <input type="hidden" id="tipo_transacciones_oculto">
        <div class="row col-md-12" style="margin: 0px">
            <div class="col-md-6">
                <p style="text-align: left">Bienvenido mi llave: <?php echo "{$_SESSION["nombres"]}" ?></p>
            </div>
            <div class="col-md-6">
                <p style="text-align: right"><?php
                    date_default_timezone_set('America/Guayaquil');
                    //$date = date('d-m-y h:i:s');
                    $date = date('d-m-Y');
                    echo $date; ?></p>
            </div>
            <div class="col-md-12 row" style="margin: 0px;padding: 0px">

                <div class="col-md-3 row" style="margin: 0px;padding: 0px">
                    <div class="col-md-6" style="margin: 0px;padding: 0px">
                        <h5>Id:</h5>

                    </div>
                    <div class="col-md-6" style="margin: 0px;padding: 0px">

                        <input  class="form-control" id="id" type="number" disabled readonly>
                    </div>

                </div>
                <div class="col-md-3" >

                    <input type="date" id="desde" class="form-control">
                </div>
                <div class="col-md-3" style="margin: 0px;padding: 0px">
                    <button onclick="buscar_arqueo()" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Buscar pato
                    </button>
                </div>
                <div class="col-md-3" style="margin: 0px;padding: 0px">
                    <button id="boton_imprimir" disabled onclick="imprimir_reporte_arqueo()" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Imprirmir
                    </button>
                </div>


            </div>
            <div class="col-md-6 row" style=";padding: 0px;margin: 0px">
                <p>Billetes</p>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="1.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_uno" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_uno" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="5.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_cinco" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_cinco" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="10.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_dies" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_dies" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="20.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_veinte" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_veinte" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="50.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_cincuenta" value="0"
                               type="number" style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_cincuenta" value="0"
                               type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="100.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="billete_cien" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_billete_cien" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-8"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="TOTAL BILLETES" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input readonly disabled class="form-control" id="total_billetes" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <p>Monedas</p>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="0.01" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_uno" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_uno" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="0.05" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_cinco" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_cinco" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="0.10" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_dies" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_dies" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="0.25" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_veinticinco" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_veinticinco" value="0"
                               type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="0.50" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_cincuenta" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_cincuenta" value="0"
                               type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>
                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-4"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="1.00" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input onkeyup="sumar_billetes_monedas(this)" onfocus="al_final(this)" class="form-control"
                               id="moneda_undolar" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input disabled readonly class="form-control" id="total_moneda_undolar" value="0" type="number"
                               style="border: 1px solid gray;background-color: transparent">
                    </div>
                </div>

                <div class="row col-md-12" style="border: 1px solid black;border-radius: 10px;padding: 0px;margin: 0px">
                    <div class="col-md-8"
                         style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px">
                        <input type="text" disabled readonly value="TOTAL MONEDAS" class="form-control"
                               style="border: 0px transparent;background-color: transparent">
                    </div>

                    <div class="col-md-4" style=";padding: 0px;margin: 0px;border-radius: 10px">

                        <input readonly disabled class="form-control" id="total_monedas" value="0" type="number"
                               style="border: 0px transparent;background-color: transparent">
                    </div>
                </div>
            </div>
            <div class="col-md-6" STYLE="text-align: right">
                <p style="text-align: right">EFECTIVO</p>

            </div>
            <div class="col-md-6" STYLE="text-align: left">
                <p style="text-align: left" id="total_suma">0</p>

            </div>
            <div class="col-sm-12" style="padding:0px">
                <button onclick="agregar_actualizar_historial_moneda()" wigth="100" style="margin-bottom: 5px"
                        type="button" class="btn btn-primary form-control">
                    Guardar
                </button>
            </div>
            <div class="col-md-12" style="padding:0px">
                <div class="col-md-4">
                    <label for="tabla_valores_cuenta_arqueo">VALORES EN CUENTA</label>
                    <div class="table-responsive">
                        <table id="tabla_valores_cuenta_arqueo" class="table table-bordered table-striped"
                               style="width:100%">
                            <thead>
                            <tr style="background-color: orange;color: white">
                                <th style="display: none">ID</th>
                                <th>NOMBRE</th>

                                <th>SALDO</th>


                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <div class="col-md-12"  >
                <div class="row col-md-4" style="border: 1px solid black">
                    <div class="col-md-6" style="border-right: 1px solid black">
                        <h5>T. CAJA</h5>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <h5 id="total_caja">0.00</h5>

                    </div>


                </div>

                <div class="row col-md-4" style="border: 1px solid black">
                    <div class="col-md-6" style="border-right: 1px solid black">
                        <h5>T. CUENTAS</h5>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <h5 id="suma_cuentas">0.00</h5>

                    </div>


                </div>

                <div class="row col-md-4" style="border: 1px solid black">
                    <div class="col-md-6" style="border-right: 1px solid black">
                        <h5>TOTAL </h5>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <h5 id="suma_billetes_monedas_cuentas">0.00</h5>

                    </div>


                </div>
                <br>
                <div class="row col-md-4" style="border: 1px solid black">
                    <div class="col-md-6" style="border-right: 1px solid black">
                        <h5>T. ARQUEO</h5>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <h5 id="suma_efectivo">0.00</h5>

                    </div>


                </div>
                <div class="row col-md-4" style="border: 1px solid black">
                    <div class="col-md-6" style="border-right: 1px solid black">
                        <h5>DIFERENCIA</h5>
                    </div>
                    <div id="div_diferencia" class="col-md-6" style="text-align: right">
                        <h5 id="diferencia">0.00</h5>

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
    <script src="js/imprimir.js"></script>


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
