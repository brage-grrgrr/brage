<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $host = 'localhost';
    $user = "brage";
    $pass = "7656Fuck+PaswordSh$#t";
    $db = "bruker_registrering";

    $con = mysqli_connect($host, $user, $pass, $db);

    if ($con->connect_error) {
        die("Tilkoblingsfeil: " . $con->connect_error);
    }
    // Hent data fra skjemaet
    $brukernavn = $_POST['brukernavn'];
    $passord = password_hash($_POST['passord'], PASSWORD_DEFAULT); // Hasher passordet
    
    // skjeker om brukernavnet finnes fra før av i databasen
    $usernameverifisiering = "SELECT * FROM account WHERE brukernavn = '$brukernavn'";
    $result = $con->query($usernameverifisiering);

    
}


?>




<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrering</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="header">
    <h1>Registrer deg</h1>
    </div>
    <form action="registrer.php" method="POST">
        <div class="container">
            <input type="text" name="brukernavn" placeholder="skriv brukernavn" required>
            <input type="password" name="passord" placeholder="skriv passord" required>
            <button type="submit">Registrer</button>

        </div>
    </form>

</body>
</html>