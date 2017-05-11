<?php


if ($_POST) {
    $con = mysqli_connect('localhost', 'root', 'nrn011', 'jardiner');

    if (!$con) {
        die('No sha pogut enviar el missatge! Si us plau envieu aquest missatge derror al administrador: '.mysql_error());
    }

    $usuari = $_POST['name'];
    $comentari = $_POST['comment'];
    $data = date('d/m/y g:i a');

    $query = "INSERT INTO comentaris ('autor','post_id','body','data') VALUES ('$usuari','NULL','$comentari','$data')";

    mysqli_query($con, $query);

    echo '<h2>Gràcies pel comentari!</h2>';
    echo '<a href="../inici.php"> Tornar a la pàgina principal</a>';

    mysqli_close($con);
}
