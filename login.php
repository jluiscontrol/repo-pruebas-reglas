<?php
error_reporting(E_ALL);
include 'complementos/tmp.php';
session_start();


if (!isset($_SESSION["nombres"])) {

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <?php
        include 'cabecera.php';
        ?>
    </head>

    <body>

    <div style="width: 100%;text-align: center;margin-bottom: 40px;">
        <div style="margin: 0px auto;width: 380px;padding-left: 10px;padding-right: 10px">
            <div class="row col-md-12">
                <div class="col-md-12">
                    <img src="imagenes/logo.png" alt="Nature" style="margin: 50px auto" class="img-fluid">

                </div>
                <div class="col-md-12">
                    <label for="input_usuario">Usuario:</label>
                    <input type="text" id="input_usuario" placeholder="Ingrese usuario" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="input_clave">Clave:</label>
                    <input type="password" id="input_clave" placeholder="Ingrese usuario" class="form-control">
                </div>
                <div class="col-md-12">
                    <button class="form-control" style="background-color: orange;color: white;margin-top: 20px" onclick="logear()">Logear</button>
                </div>
            </div>


        </div>
    </div>

    <div id="mimodal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Error iniciando sesión</h4>
                </div>
                <div class="modal-body">
                    <p id="pMensaje"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="form-control" data-dismiss="modal">ok</button>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

    header('Location: '.$link);

}
?>