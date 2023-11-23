<?php
// Include the file with your database connection functions
include "/User/Database/functions.php";

// Establish a database connection
$conn = DBConnect(); // You should have a function like getDatabaseConnection() in your functions.php

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT c_name, c_price FROM course";
$result = $conn->query($sql);

// Prepare data in JSON format
$data = [
    'labels' => [],
    'values' => []
];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['labels'][] = $row['c_name'];
        $data['values'][] = $row['c_price'];
    }
}
echo"hi";
// Close the database connection
$conn->close();

// Send data as JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
