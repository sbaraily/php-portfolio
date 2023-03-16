<?php
$hostname = "ordway.iad1-mysql-e2-18a.dreamhost.com";
$username = "kb_student";
$password = "@Tacos4Life@";
$databasename = "kb_class";

try {
  //Create new PDO Object with connection parameters
  $conn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

  //Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Variable containing SQL command
  $sql = "SELECT * FROM samir_table;";

  //Execute SQL statement on server
  $return = $conn->query($sql);

  //Print returned data to the screen
  echo "<b>The data currently in the database: </b><br>\n";
  foreach ($conn->query($sql) as $row) {
    echo $row['contactID'] . " | ";
    echo $row['name'] . " | ";
    echo $row['email'] . " | ";
    echo $row['contactBack'] . " | ";
    echo $row['comments'] . " | ";
    echo $row['dateSent'] . "<br>\n";
  }
} catch (PDOException $error) {

  //Return error code if one is created
  echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
}

$conn = null;

?>