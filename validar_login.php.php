<?php

include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
        WHERE email='$email' 
        AND password='$password'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){
    
    header("Location: bienvenida.php");

} else {

    echo "
    <script>
        alert('Correo o contraseña incorrectos');
        window.location = 'index.php';
    </script>
    ";

}

?>