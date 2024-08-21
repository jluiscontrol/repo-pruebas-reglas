<?php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarSupportedContent-3">
            <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample08" style="">
                <a class="navbar-brand">
                    <img style="cursor: pointer" src="imagenes/logo.png" width="150" onclick="inicio()">
                </a>

                <ul class="navbar-nav">
                    <?php
                    if ($_SESSION["cargo"] != "ADM") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Operaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="arqueo.php">Arqueo</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Operaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="movimientos.php">Movimientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tipo_transaccion.php">Tipos transaccion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.php">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entidades.php">Entidades/Bancos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="graficos.php">Gráficos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="arqueo.php">Arqueo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="configuracion.php">Configuración</a>
                        </li>
                        <?php
                    }
                    ?>


                    <li class="nav-item">
                        <a class="nav-link" onclick="cerrar_sesion()" style="cursor: pointer">Cerrar sesión</a>
                        <!--<img src="imagenes/cerrar-sesion.png" onclick="cerrar_sesion()" style="cursor: pointer"
                             class="img-fluid nav-link" alt="">-->


                </ul>

                <!--<ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/manavivelo/" target="_blank"
                           class="nav-link waves-effect waves-light">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="https://twitter.com/manavivelo?t=3wpq-Us_n9_0k4xD_urW3g&amp;s=08" target="_blank"
                           class="nav-link waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/manavivelo/?utm_medium=copy_link" target="_blank"
                           class="nav-link waves-effect waves-light">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
</nav>