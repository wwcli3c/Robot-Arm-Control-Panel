<?php
$id = $_GET['id'];
$conn = new mysqli("localhost", "root", "e112233E", "robot_arm");
$conn->query("DELETE FROM poses WHERE id = $id");
$conn->close();
?>
