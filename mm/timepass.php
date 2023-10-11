<?php
session_start();
// if (isset($_SESSION['fullname'])){
    // $coursename = $_POST['coursename'];
$Fullname = $_SESSION['fname'];
echo $Fullname;
// $coursename = $_SESSION['course'];
// echo $coursename;
// }
?>