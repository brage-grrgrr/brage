<?php
$user = "example_user";
$password = "7656Fuck+PaswordSh$#t";
$database = "bruker_registrering";
$table = "bruker";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>";
  foreach($db->query("SELECT Brukernavn FROM $table") as $row) {
    echo "<li>" . htmlspecialchars($row['Brukernavn']) . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
