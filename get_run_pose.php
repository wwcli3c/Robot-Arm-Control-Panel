<?php
$conn = new mysqli("localhost", "root", "e112233E", "robot_arm");
$result = $conn->query("SELECT * FROM poses WHERE status = 1 ORDER BY id ASC LIMIT 1");
echo json_encode($result->fetch_assoc());
$conn->close();
?>
