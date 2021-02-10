<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>

<body>
<?php
require_once_once("dbcon.php");
session_start();
if(isset($_POST['login'])){
$sql = "SELECT cinema_id, cinema_name, cinema_time,cinema_username,cinema_pin FROM cinema";


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "no resault";
}
if(isset($_POST["log out"])){
session_unset();
}
if(isset(($_SESSION))){
require_once("table.php");
}
else{
    require_once("login.php");
}
$conn->close();
}
?>

</body>
</html>