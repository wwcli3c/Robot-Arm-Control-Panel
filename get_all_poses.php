<?php
$conn = new mysqli("localhost", "root", "e112233E", "robot_arm");
$result = $conn->query("SELECT * FROM poses");
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
$conn->close();
?>
