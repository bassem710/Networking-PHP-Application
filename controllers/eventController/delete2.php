<?php
if( isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
$username = "root";
$password = "";
$database = "crudgroup";

$connection = new mysqli($servername,$username,$password,$database);

$sql = "DELETE FROM crud2 WHERE id=$id";
$connection->query($sql);
}

header("location: /Networking-PHP-Application-main/models/event.php");
exit;
?>
