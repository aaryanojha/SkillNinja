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
    // $query = "SELECT * FROM users ORDER BY u_id ASC;";
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

function fullname(String $Full_Name)
{
    $conn = DBConnect();
    $query = "select * from payment where Full_Name='$Full_Name'";
    $result = mysqli_query($conn, $query);
    return $result;
}
// function display_certificate(int $c_id)
// {
//     $conn = DBConnect();
//     $query = "select * from course_table where c_id='$c_id'";
//     $result = mysqli_query($conn, $query);
//     return $result;
// }

// function Get_Courses(int $c_id)
// {
//     $conn = DBConnect();
//     $query = "select * from course_table where c_id='$c_id'";
//     $result = mysqli_query($conn, $query);
//     return $result;
// }
?>