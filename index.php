<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Dooku</title>
    <link rel="stylesheet" href="css/loginStyles.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#bababa">
    <meta name="msapplication-TileColor" content="#bababa">
    <!-- SWEETALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="theme-color" content="#bababa">
</head>

<body>
    <!-- particles.js container -->
    <div id="particles-js">
        <div class="login-box">
            <h2>Login</h2>
            <form action="./functions/validacion.php" method="POST">
                <div class="user-box">
                    <input type="text" name="username" required="">
                    <label>Usuario</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Contraseña</label>
                </div>
                <small></small>
                <br>
                <button type="submit">Entrar</button>
                <br>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['errorLogin'])) {
        ?>
        <script>
        Swal.fire({
        background:'#2b2b2b',
        color:'white',
        icon: 'error',
        iconColor:'#b33838',
        title: 'USUARIO INCORRECTO!'
    })
          </script>
    <?php
    }
    ?>

</body>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./js/loginAnimation.js"></script>


</html>