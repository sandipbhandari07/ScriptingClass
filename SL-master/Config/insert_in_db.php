<?php
include_once 'db_conn.php';

$title = $_POST['titlee'];
$content = $_POST['contentt'];
$id = $_POST['idd'];
$insertsql = "INSERT INTO blog (id, title, details) VALUES ('$id', '$title', '$content');";

mysqli_query($conn, $insertsql);
header("Location: ../blog_list.php");



?>