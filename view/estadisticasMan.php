<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#bababa">
    <meta name="msapplication-TileColor" content="#bababa">
    <meta name="theme-color" content="#bababa">
    <!-- Link font awesome -->
    <script src="https://kit.fontawesome.com/2b5286e1aa.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estadisticasStyles.css">
    <!-- JS -->
    <script src="../js/functions.js"></script>
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
                <div class="justify-start">
                    <li><a id="volver" href="./man.php"><i class="fa-solid fa-arrow-left"></i></a></li>
                    <li><p style="color: white;">Bienvenido <b><?php echo htmlspecialchars($_SESSION['username_man']) ?></b></p></li>
                </div>
                <li><a id="filtros" onclick="abrirFiltros()" href="#"><i class="fa-solid fa-magnifying-glass"></i> FILTROS</a></li>
                <form style="display: none;" id="div-filtros" method="get">
                    <li><input class="form-control form-control-sm filter" id="filtro-user" name="filtro-user" type="text" placeholder="Camarero"></li> <!--FILTRO ID DE LA MESA-->
                    <li><input class="form-control form-control-sm filter" id="filtro-mesa" name="filtro-mesa" type="text" placeholder="ID de la mesa"></li> <!--FILTRO UBICACIÓN-->
                    <li><input class="form-control form-control-sm filter" id="filtro-ubi" name="filtro-ubi" type="text" placeholder="Ubicación"></li> <!--FILTRO OCUPACIÓN-->
                    <li><input class="enviar" name="btn_enviar" type="submit" value="Enviar"></li>
                </form>
                <div class="justify-end">
                    <li><a href="../functions/cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="region-rest">
        <div class="widget-rest" id="salon">
            <div class="container">
            <?php
                require_once '../functions/funciones.php';

                if (isset($_GET['btn_enviar'])) {
                    $user = $_GET['filtro-user'];
                    $mesa = $_GET['filtro-mesa'];
                    $ubi = $_GET['filtro-ubi'];
                } else {
                    $user = '';
                    $mesa = '';
                    $ubi = '';
                }
            
                $listado_estadisticas = getReservasMan($user, $mesa, $ubi);

                // MOSTRAR DATOS EN FORMA DE TABLA:
                echo '<table class="tablacrud table table-striped table-hover">';
                    echo '<tr class="bloqueado">';
                        echo '<th>INCIDENCIA</th>';
                        echo '<th>DESCRIPCIÓN</th>';
                        echo '<th>SOLUCIÓN</th>';
                        echo '<th>TÉCNICO</th>';
                        echo '<th>CAMARERO</th>';
                        echo '<th>MESA</th>';
                        echo '<th>UBICACIÓN</th>';
                    echo '</tr>';
                    foreach ($listado_estadisticas as $incidencias) {
                        echo "<tr>";
                        for ($i=0; $i < count($incidencias); $i++) { 
                            echo "<td>".htmlspecialchars((string) $incidencias[$i])."</td>";
                        }
                        echo "</tr>";
                    }
                echo '</table>';
                ?>

            </div>
        </div>
    </div>

</body>
</html>