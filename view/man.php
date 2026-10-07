<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#bababa">
    <meta name="msapplication-TileColor" content="#bababa">
    <meta name="theme-color" content="#bababa">
    <!-- Link font awesome -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/2b5286e1aa.js" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="../css/inicioStyles.css">
    <!-- JQUERY -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <?php
    require_once '../functions/funciones.php';
    validarSesionMan();
    ?>

    <!-- NAVBAR -->
    <div class="region-navbar">
        <nav class="widget-navbar">
            <ul>
                <li><a id="btn_salon" href="#">Salón</a></li>
                <li><a id="btn_terraza" href="#">Terraza</a></li>
                <li><a id="btn_privada-1" href="#">Sala Privada 1</a></li>
                <li><a id="btn_privada-2" href="#">Sala Privada 2</a></li>
                <li><a id="estadisticas" href="./estadisticasMan.php"><i class="fa-solid fa-book"></i></a></li>
                <li class="justify-end"><a href="../functions/cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
            <!-- <div id="nav-container">
                <div class="toggle-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div> -->
        </nav>
    </div>
    
    <!-- MAPAS RESTAURANTE -->
    <div class="region-rest">
        <div class="widget-rest" id="salon">
            <?php
                require_once '../config/conexion.php';

                $sql = "SELECT * FROM `tbl_mesa` WHERE `ubicacion` = 'salon';";
                $listado_mesas = mysqli_fetch_all(mysqli_query($conexion, $sql));
                foreach ($listado_mesas as $mesas) {
                    if ($mesas[2] == '2') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
                        } 
                    }
                }
                ?>
        </div>
        <div class="widget-rest" id="terraza">
            <?php
                require_once '../config/conexion.php';

                $sql = "SELECT * FROM `tbl_mesa` WHERE `ubicacion` = 'terraza';";
                $listado_mesas = mysqli_fetch_all(mysqli_query($conexion, $sql));
                foreach ($listado_mesas as $mesas) {
                    if ($mesas[2] == '2') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
                        } 
                    }
                }
                ?>
        </div>
        <div class="widget-rest" id="sala-privada-1">
            <?php
                require_once '../config/conexion.php';

                $sql = "SELECT * FROM `tbl_mesa` WHERE `ubicacion` = 'sala_privada1';";
                $listado_mesas = mysqli_fetch_all(mysqli_query($conexion, $sql));
                foreach ($listado_mesas as $mesas) {
                    if ($mesas[2] == '2') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
                        } 
                    }
                }
                ?>
        </div>
        <div class="widget-rest" id="sala-privada-2">
            <?php
                require_once '../config/conexion.php';

                $sql = "SELECT * FROM `tbl_mesa` WHERE `ubicacion` = 'sala_privada2';";
                $listado_mesas = mysqli_fetch_all(mysqli_query($conexion, $sql));
                foreach ($listado_mesas as $mesas) {
                    if ($mesas[2] == '2') {
                        if ($mesas[2] == '2') {
                            if ($mesas[3] == 'Averiado') {
                                echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                            } 
                        }
                        if ($mesas[2] == '4') {
                            if ($mesas[3] == 'Averiado') {
                                echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                            } 
                        }
                        if ($mesas[2] == '6') {
                            if ($mesas[3] == 'Averiado') {
                                echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                            } 
                        }
                        if ($mesas[2] == '10') {
                            if ($mesas[3] == 'Averiado') {
                                echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                            } 
                        }
                        if ($mesas[2] == '12') {
                            if ($mesas[3] == 'Averiado') {
                                echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
                            } 
                        }
                    }
                }
                ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="page-wrapper">
        <!-- <a class="btn trigger" href="#">click me</a> -->
    </div>

    <!-- Modal -->
    <div class="modal-wrapper">
        <div class="modal">
            <div class="head">
                <a class="btn-close trigger" id="asd" href="#">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
            <div class="content">
                <div class="good-job">
                    <!-- CONTENIDO -->
                    <h1 id="title-modal">Mesa</h1>
                    <br>
                    <br>
                    <div class="login-box">
                        <form action="../functions/actualizar.php" method="post" id="form1">
                        <div id="incidencia">
                            <div class="user-box">
                                    <input type="text" id="solu_inc" name="solu_inc">
                                    <label>Solución avería</label>
                                </div>
                                <button type="submit" id="Inc" value="Incidencia" name="Incidencia" class="btnLiberar button_modal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Solucionar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Script hamburguesa navbar -->
<script src="../js/functions.js"></script>

</html>