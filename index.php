<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/layout/style.css">
    <title>Login</title>
</head>

<body>
    <div class="fondo">
        <div class="contenedor">
            <div class="img-content">

            </div>
            <div class="formulario">
                <div class="titulo-formulario">
                    <h1>Inicia Sesion</h1>
                    <span>Inicia un nuevo Mundo</span>
                </div>
                <div>
                    <?php 
                        require_once 'src/controlador/login-controlador.php';
                    ?>
                </div>
                <form action="" method="post">
                    <div class="content">
                        <label for=""><span>Correo</span> <br>
                            <input type="email" name="user" id="">
                        </label>

                    </div>
                    <div class="content">
                        <label for="pass"><span>Contraseña</span> <br>
                            <input type="password" name="pass" id="">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </label>
                    </div>
                    <span class="registro-form">no tienes cuenta? registrate <a href="#"> aqui</a></span>
                    <input type="submit" name="ingresar" value="Ingresar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>