<?php
require_once('../Database/functions.php');
// display_certificate();
// $c_id = $_SESSION["c_id"];
// echo $c_id;
session_start();
$a = $_SESSION["u_id"];
echo $a;

$b = $_SESSION["courseid"];
echo $b;

// $result = display_certificate($_SESSION['c_id']);
// display_certificate();
// each $result;
// $c_id =$_SESSION['c_id']
// $c_id = $row["c_id"];
// echo $c_id;

//Connect to the MySQL database
// require_once('../Database/functions.php');

// $conn = DBConnect();
// $result = display_certificate("c_id");
// $c_id = getSessionVar('c_id');
// echo $result;
?>