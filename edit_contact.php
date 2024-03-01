<?php
require_once 'db_connect.php';

$id = $_GET['id'];
$query = "SELECT * FROM contacts_table WHERE id=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa Liên Hệ</title>
</head>
<body>
    <h2>Sửa Liên Hệ</h2>
    <form action="edit_contact_action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Tên: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Số Điện Thoại: <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>" required><br><br>
        <input type="submit" name="submit" value="Lưu">
    </form>
</body>
</html>
