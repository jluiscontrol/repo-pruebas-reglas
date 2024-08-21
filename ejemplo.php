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
        <?php
        include 'cabecera.php';
        ?>
    </head>
    <body>
    <?php
    include 'navbarweb.php';
    ?>


    <div style="margin-top: 40px" class="container">


        <div class="row" style="width: 100%;display: flex">
            <p style="text-align: right">Bienvenido: <?php echo "{$_SESSION["nombres"]}" ?></p>


        </div>


    </div>

    <div style="width:50%;">
        <div style="border-radius: 10px;border: 1px solid black;width:100%">
            <div style="width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 1.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
                </div>
            </div>
        </div>
        <div style="width:100%">
            <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 5.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
                </div>
            </div>
            <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 10.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
                </div>
            </div>
            <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 20.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
                </div>
            </div>
            <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 50.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
                </div>
            </div>
            <div style="border-radius: 10px;border: 1px solid black;width:100%;display:flex">
                <div style="text-align: center;;background-color: cornflowerblue;padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px"> 100.00 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%">
                    <h5 style="margin:5px;"> 0.0 </h5>
                </div>
                <div style=";padding: 0px;margin: 0px;border-radius: 10px;width:33%;border-left:1px solid black">
                    <h5 style="margin:5px;"> 0.00 </h5>
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

    <script src="js/js.js"></script>


    </body>
    </html>
    <?php
} else {
    include 'complementos/link.php';

    header('Location: ' . $link . 'login.php');
}
?>