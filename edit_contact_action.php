<?php
require_once 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];

$query = "UPDATE contacts_table SET name=?, phone_number=? WHERE id=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('ssi', $name, $phone_number, $id);
$stmt->execute();

$mysqli->close();

header("Location: index.php");
exit;
?>
