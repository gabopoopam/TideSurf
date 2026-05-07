<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TideSurf - Full Screen Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra superior de ancho completo -->
    <header class="full-header">
        <div class="header-content">
            <img src="images/logo.tidesurf.jpeg" alt="Logo" class="logo">
            <h1>Inicio de Sesión</h1>
        </div>
    </header>

    <!-- Contenido principal que llena el resto de la pantalla -->
    <main class="main-content">
        <div class="form-wrapper">
            <h2>Bienvenido a TideSurf</h2>

            <form action="validar_login.php" method="POST">
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="fa-solid fa-eye-slash eye"></i>
                </div>

                <div class="helper-text">
                    <a href="#">¿olvidé mi contraseña?</a>
                </div>

                <button type="submit" class="btn-full">
                    <i class="fa-solid fa-person-surfing"></i> Iniciar Sesión
                </button>
            </form>

            <div class="register-footer">
                <span>No tienes cuenta?</span>
                <a href="registro.php">Regístrate</a>
            </div>
        </div>
    </main>

</body>
</html>