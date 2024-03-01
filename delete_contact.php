<?php
require_once 'db_connect.php';

$id = $_GET['id'];

$query = "DELETE FROM contacts_table WHERE id=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();

$mysqli->close();

header("Location: index.php");
exit;
?>
