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
function display_payment(int $u_id)
{
    $conn = DBConnect();
    $query = "select * from payment where u_id='$u_id'";
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

function Get_Courses(int $c_id)
{
    $conn = DBConnect();
    $query = "select * from course_table where c_id='$c_id'";
    $result = mysqli_query($conn, $query);
    return $result;
}
?>