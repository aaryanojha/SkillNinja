<?php
function DBConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "skillninja";
    //Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
function display_enquiries()
{
    global $conn;
    $query = "SELECT * FROM enquiries ORDER BY id ASC;";
    $result = mysqli_query($conn, $query);
    return $result;
}
function display_users()
{
    global $conn;
    $query = "SELECT * FROM users WHERE isAdmin <> 1 ORDER BY u_id ASC";
    $result = mysqli_query($conn, $query);
    return $result;
}
function display_course()
{
    global $conn;
    $query = "SELECT * FROM course ORDER BY c_id ASC;";
    $result = mysqli_query($conn, $query);
    return $result;
}
function display_payment(int $u_id)
{
    $conn = DBConnect();
    $query = "select * from payment where u_id='$u_id'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function display_date()
{
    $conn = DBConnect();
    $q = "SELECT * FROM course_users;";
    $date = mysqli_query($conn, $q);
    return $date;
}



?>