<?php
require_once 'db_connect.php';

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];

$query = "INSERT INTO contacts_table (name, phone_number) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('ss', $name, $phone_number);
$stmt->execute();

$mysqli->close();

header("Location: index.php");
exit;
?>
