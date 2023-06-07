<?php

$config = parse_ini_file('.env');
$servername = $config['DB_HOST'];
$username = $config['DB_USER'];
$password =$config['DB_PASSWORD'];
$dbname = $config['DB_NAME'];

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection -> connect_error){
    die ("Connection failed:" . $connection-> connect_error);
}

// Obtener usuarios registrados
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="table  mt-4">';
  
    echo '<thead><tr><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th><th>Nombre usuario </th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      
        echo '<tr><td>'.$row["Nombre"].'</td><td>'.$row["Primer apellido"].'</td><td>'.$row["Segundo apellido"].'</td><td>'.$row["Nombre usuario"].'</td><td>'.$row["Email"].'</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="alert alert-info mt-4">No hay usuarios registrados</div>';
}

mysqli_close($connection);
?>