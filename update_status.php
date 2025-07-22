<?php
$id = $_GET['id'];
$conn = new mysqli("localhost", "root", "e112233E", "robot_arm");
$conn->query("UPDATE poses SET status = 0 WHERE id = $id");
$conn->close();
?>
