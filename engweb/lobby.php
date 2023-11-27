<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Lobby Information</title>
  <link rel="stylesheet" type="text/css" href="game.css">
</head>
<html>
<body>
  <?php
  $servername = "192.168.1.153";
  $username = "myuser";
  $password = "Kokokoko123!";
  $database = "lobby";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      // Get the submitted name and lobby number
      $name = $_POST["name"];
      $lobbyNumber = $_POST["lobbyNumber"];

      // Insert the user into the database
      $sql = "INSERT INTO lobby (name, lobbyNumber) VALUES ('$name', '$lobbyNumber')";
      if ($conn->query($sql) === TRUE) {
          echo "User added successfully.";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

  // Close the connection
  $conn->close();
  ?>

</body>
</html>
