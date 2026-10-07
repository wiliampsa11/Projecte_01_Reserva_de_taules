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
    validarSesionUser();
    ?>

    <!-- NAVBAR -->
    <div class="region-navbar">
        <nav class="widget-navbar">
            <ul>
                <li><a id="btn_salon" href="#">Salón</a></li>
                <li><a id="btn_terraza" href="#">Terraza</a></li>
                <li><a id="btn_privada-1" href="#">Sala Privada 1</a></li>
                <li><a id="btn_privada-2" href="#">Sala Privada 2</a></li>
                <li><a id="estadisticas" href="./estadisticas.php"><i class="fa-solid fa-book"></i></a></li>
                <li class="justify-end"><a href="../functions/cerrarSesion.php"><i
                            class="fa-solid fa-right-from-bracket"></i></a></li>
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
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/libre-2.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/ocupado-2.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/libre-4.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/ocupado-4.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/libre-6.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/ocupado-6.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/libre-10.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/ocupado-10.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/libre-12.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/ocupado-12.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
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
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/libre-2.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/ocupado-2.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/libre-4.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/ocupado-4.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/libre-6.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/ocupado-6.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/libre-10.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/ocupado-10.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/libre-12.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/ocupado-12.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
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
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/libre-2.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/ocupado-2.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/libre-4.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/ocupado-4.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/libre-6.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/ocupado-6.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/libre-10.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/ocupado-10.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/libre-12.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/ocupado-12.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
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
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/libre-2.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-2' src='../img/ocupado-2.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-2' src='../img/averiado-2.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '4') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/libre-4.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-4' src='../img/ocupado-4.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-4' src='../img/averiado-4.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '6') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/libre-6.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest trigger'><img class='ocu-6' src='../img/ocupado-6.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest trigger'><img class='ocu-6' src='../img/averiado-6.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '10') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/libre-10.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/ocupado-10.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-10 trigger'><img class='ocu-10' src='../img/averiado-10.png' alt=''></button>";
                        } 
                    }
                    if ($mesas[2] == '12') {
                        if ($mesas[3] == 'Libre') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/libre-12.png' alt=''></button>";
                        } elseif ($mesas[3] == 'Ocupado') {
                            echo "<button value='".$mesas[0]."' class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/ocupado-12.png' alt=''></button>";
                        } else if ($mesas[3] == 'Averiado') {
                            echo "<button value='".$mesas[0]."' disabled class='mesa-rest div-12 trigger'><img class='ocu-12' src='../img/averiado-12.png' alt=''></button>";
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
                    <h1 id="title-modal">Restaurante Dooku</h1>
                    <div class="login-box">
                        <div class="selecion-modal">
                            <button id="btn_reservar" class="button_modal">Reservar</button>
                            <button id="btn_liberar" class="button_modal">Liberar</button>
                            <button id="btn_averiado" class="button_modal">Averiado</button>
                        </div>
                        <form action="../functions/actualizar.php" method="POST" id="form1">
                            <!-- RESERVAR -->
                            <div id="reservar">
                                <div class="user-box">
                                    <input type="text" id="nombre" name="nombre">
                                    <label>Nombre</label>
                                </div>
                                <div class="user-box">
                                    <input type="text" id="apellidos" name="apellido">
                                    <label>Apellido</label>
                                </div>
                                <div class="user-box">
                                <input type="tel" id="telefono" name="tel">
                                    <label>Telefono</label>
                                </div>
                                <div class="user-box">
                                <input type="text" id="capa" name="capa">
                                    <label>Personas</label>
                                </div>
                                <div class="user-box">

                                <button type="submit" id="Ocu" value="Ocupado" name="Ocupado" onclick="return validarReserva()" class="btnReservar button_modal" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Reservar
                                </button>
                                </div>

                            </div>
                            <!-- LIBERAR -->
                            <div id="liberar">
                                <p>Este botón sirve para liberar una mesa cuando la reserva haya finalizado!</p>
                                <button type="submit" id="Lib" value="Libre" name="Libre"
                                    class="btnLiberar button_modal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Liberar
                                </button>
                            </div>
                            <!-- AVERIADO -->
                            <div id="averiado">
                                <p>Escriba en este formulario el problema que haya encontrado:</p>
                                <div style="margin-top: 30px;" class="user-box">
                                    <input type="text" id="desc" name="desc">
                                    <label>Descripción</label>
                                </div>
                                <p>Utilize este botón para indicar al equipo de mantenimiento que hay una incidencia con una mesa!</p>
                                <button type="submit" id="Ave" value="Averiado" name="Averiado" class="btnAveriado button_modal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Averiado
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