<?php
function login($username, $password) {
    require "../config/conexion.php";

    session_start();

    if (!$conexion) {
        echo "<script>location.href = '../index.php?errorConexion=true';</script>";
        die;
    }

    // Sentencia para ver si ese usuario que nos han introducido es un camarero
    $stmt1 = mysqli_prepare($conexion, "SELECT * FROM tbl_user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($stmt1, "ss", $username, $password);
    mysqli_stmt_execute($stmt1);
    $valid_login1 = mysqli_stmt_get_result($stmt1);
    $match1 = $valid_login1 -> num_rows;
    
    // print_r($match1);

    if ($match1 === 1) {
        foreach ($valid_login1 as $key => $user) {
            // var_dump($user);
            $_SESSION['username_user'] = $user['username'];
            $_SESSION['id_user'] = $user['id_user'];

        }
        echo "<script>location.href = '../view/inicio.php';</script>";
    } else {
        
        // Sentencia para ver si ese usuario que nos han introducido es un técnico de mantenimiento
        $stmt2 = mysqli_prepare($conexion, "SELECT * FROM tbl_man WHERE username = ? AND password = ?");
        mysqli_stmt_bind_param($stmt2, "ss", $username, $password);
        mysqli_stmt_execute($stmt2);
        $valid_login = mysqli_stmt_get_result($stmt2);
        $match = $valid_login -> num_rows;

        if ($match === 1) {
            foreach ($valid_login as $key => $man) {
                $_SESSION['username_man'] = $man['username'];
                $_SESSION['id_man'] = $man['id_man'];
            }
            echo "<script>location.href = '../view/man.php';</script>";
        }else {
            echo "<script>location.href = '../index.php?errorLogin=true';</script>";
        }
    }
}   

function validarSesionUser() {
    // FUNCIÓN PARA VALIDAR LA SESIÓN (INCLUIR EN CADA PÁGINA)
    session_start();
    if (!isset($_SESSION['username_user'])) {
        echo "<script>window.location.href = '../index.php?error=errorSesion';</script>";
    }
}

function validarSesionMan() {
    // FUNCIÓN PARA VALIDAR LA SESIÓN (INCLUIR EN CADA PÁGINA)
    session_start();
    if (!isset($_SESSION['username_man'])) {
        echo "<script>window.location.href = '../index.php?error=errorSesion';</script>";
    }
}

function getReservas($id, $ubi, $client, $ocu) {
    require_once '../config/conexion.php';

    $sql = 
    "SELECT tbl_mesa.id_mesa, `ubicacion`, `capacidad`, `nom_persona`, `telefono_persona`, `hora_inici`, `hora_fi`, `duracion` 
    FROM `tbl_mesa` 
    INNER JOIN `tbl_reserva` 
    ON tbl_mesa.id_mesa = tbl_reserva.id_mesa
    WHERE tbl_mesa.id_mesa LIKE ? AND ubicacion LIKE ? AND nom_persona LIKE ? AND capacidad LIKE ?;";

    $filtros = array_map(fn($v) => '%' . $v . '%', [$id, $ubi, $client, $ocu]);
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", ...$filtros);
    mysqli_stmt_execute($stmt);
    $listado_estadisticas = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
    return $listado_estadisticas;
}

function getReservasMan($user, $mesa, $ubi) {
    require_once '../config/conexion.php';

    $sql = 
    "SELECT `id_inc`, `desc_inc`, `solu_inc`, `id_man_fk`, `id_user_fk`, `id_mesa_fk`, `ubicacion`
    FROM `tbl_mesa` 
    INNER JOIN `tbl_incidencia` 
    ON tbl_mesa.id_mesa = tbl_incidencia.id_mesa_fk
    WHERE id_mesa LIKE ? AND ubicacion LIKE ? AND id_user_fk LIKE ?;";

    $filtros = array_map(fn($v) => '%' . $v . '%', [$mesa, $ubi, $user]);
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "sss", ...$filtros);
    mysqli_stmt_execute($stmt);
    $listado_estadisticas = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
    return $listado_estadisticas;
}