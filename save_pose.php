<?php
$data = json_decode(file_get_contents("php://input"), true);
$conn = new mysqli("localhost", "root", "e112233E", "robot_arm");
$stmt = $conn->prepare("INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiiiii", ...$data['motors']);
$stmt->execute();
$conn->close();
?>
