<?php
require('config.php');

$offset = $_POST['offset'];
$limit = 3;

$sql = "SELECT * FROM post WHERE removed=0 ORDER BY date DESC LIMIT $offset, $limit ";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();