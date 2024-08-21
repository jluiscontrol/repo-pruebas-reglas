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

        <input type="hidden" id="ocultar_reporte">
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
            <div class="col-md-12 row">
                <div class="col-md-4">
                    <label for="nombre">Nombre de la empresa</label>
                    <input id="nombre" type="text" class="form-control">

                </div>
            </div>

            <div class="col-md-12 row" style="margin-top: 10px">
                <div class="col-md-4">

                    <button onclick="guardar_nombre()" wigth="100" style="margin-bottom: 5px"
                            type="button" class="btn btn-primary form-control">
                        Guardar
                    </button>

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
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
