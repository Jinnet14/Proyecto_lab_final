<?php

// Getting data of the form
if ($_POST) {
    $nombre = $_POST['name'];
    $primerApellido = $_POST['surname'];
    $segundoApellido = $_POST['secondSurname'];
    $nombreUsuario = $_POST['accountName'];
    $email = $_POST['email'];
    $clave = $_POST['password'];
}

//Validate data


if (strlen($clave) < 4 || strlen($clave) > 8) {
    echo '<div class="alert alert-danger mt-4">La longitud de la contraseña debe ser entre 4 y 8 caracteres</div>';
} else {
    //DDBB connection
    $config = parse_ini_file('.env');
    $servername = $config['DB_HOST'];
    $username = $config['DB_USER'];
    $password = $config['DB_PASSWORD']; // esta es la variable pass original
    $dbname = $config['DB_NAME'];

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed:" . $connection->connect_error);
    }

    
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {        
        echo '<div class="alert alert-danger mt-4">El email ya está registrado</div>';
    } else {        
       
        $sql = "SELECT * FROM users WHERE `Nombre usuario`='$nombreUsuario'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="alert alert-danger mt-4">El nombre de usuario ya está registrado</div>';
        } else {            
          
            $insert = "INSERT INTO users (Nombre, `Primer apellido`, `Segundo apellido`, Email, `Nombre usuario`, Contrasena) VALUES ('$nombre','$primerApellido','$segundoApellido','$email','$nombreUsuario','$clave')";

            mysqli_query($connection, $insert);

            
            echo"Success";
        }
    }
    mysqli_close($connection);
}



?>