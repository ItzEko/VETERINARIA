<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Login</title>
</head>
<body>
    <section class="login-imagen">
        <div class="login-imagen-pethealth">
            <div class="img">
                <img src="assets/pethealt.jpeg" alt="pethealth">
            </div>
        </div>
    </section>
    <section class="login-fondo">
        <div class="login-fondo-inicio">
            <div class="img">
                <img src="assets/fondo.jpg" alt="fondo">
            </div>
        </div>
    </section>
    <section class="login-formulario">
        <div class="login-formulario-inicio">
            <div class="h1-formulario">
                <div class="circulo"></div>
                <h1>BERACA</h1>
            </div>
            <form action="controller/loginController.php" method="post" class="fomulario" id="formulario">
                <div class="correo_usuario">
                    <label for="">Correo u Usuario</label>
                    <br>
                    <input type="text" id="correo" name="correo">
                </div>
                <div class="contrasena">
                    <label for="">Contraseña</label>
                    <br>
                    <input type="password" id="contra" name="contra">
                </div>
                <div class="btnLogin">
                    <button type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>