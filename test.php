<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Getting data of the form
    $nombre = "juan";
    $primerApellido = "perez";
    $segundoApellido = "mena";
    $nombreUsuario = "perezmena";
    $email = "email@email.com";
    $clave = "dasdasd";



    $config = parse_ini_file('.env');
    $servername = $config['DB_HOST'];
    $username = $config['DB_USER'];
    $password = $config['DB_PASSWORD'];
    $dbname = $config['DB_NAME'];

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed:" . $connection->connect_error);
    }
    // `Nombre`
    //$insert = "INSERT INTO users (Nombre, \"Primer apellido\", \"Segundo apellido\", Email, \"Nombre usuario\", Contraseña) VALUES ('$nombre','$primerApellido','$segundoApellido','$email','$nombreUsuario','$password')";
    $insert = "INSERT INTO users (Nombre, `Primer apellido`, `Segundo apellido`, Email, `Nombre usuario`, Contrasena) VALUES ('$nombre','$primerApellido','$segundoApellido','$email','$nombreUsuario','$clave')";
    mysqli_query($connection, $insert);

    // Check if user already exists
    /*
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="alert alert-danger mt-4">El email ya está registrado</div>';
    } else {
        // Check if user already exists
        $sql = "SELECT * FROM users WHERE AccountName='$nombreUsuario'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="alert alert-danger mt-4">El nombre de usuario ya está registrado</div>';
        } else {
            //Insert data
            $insert = "INSERT INTO users (AccountName, Name, Surname, SecondSurname, Email, Password) VALUES ('$nombreUsuario','$nombre','$apellido','$segundoApellido','$email','$password')";

            mysqli_query($connection, $insert);

            // // Redirect to index.html 
            echo"Success";
        }
    }
}
    */
    mysqli_close($connection);



?>