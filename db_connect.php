<?php
$host = "localhost";
$username = "tên_người_dùng_của_bạn";
$password = "mật_khẩu_của_bạn";
$database = "tên_cơ_sở_dữ_liệu_của_bạn";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}
?>
