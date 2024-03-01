<?php

require_once 'db_connect.php';


$query = "SELECT * FROM contacts_table";
$result = $mysqli->query($query);

echo "<h2>Danh Bạ Điện Thoại</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Tên</th><th>Số Điện Thoại</th><th>Thao Tác</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['phone_number']."</td>";
    echo "<td><a href='edit_contact.php?id=".$row['id']."'>Sửa</a> | <a href='delete_contact.php?id=".$row['id']."'>Xóa</a></td>";
    echo "</tr>";
}
echo "</table>";


$mysqli->close();
?>

<a href="add_contact.php">Thêm Liên Hệ Mới</a>
