<?php
// Check if the login form was submitted
if (isset($_POST["login"])) {
    // Get the username and password from the form
    $UserName = $_POST["username"];
    $Password = $_POST["password"];

    // Connect to the database
    require_once "functions.php";

    $conn = DBConnect();

    if (!empty($UserName) && !empty($Password)) {
        $INSERT = "INSERT Into users(name,pass) values('$UserName','$Password')";
        $result = $conn->query($INSERT);

        if ($result) {
            echo "<script> alert('hi.');
              window.location.href='../Homepage/index.html';
              </script>";
        } else {
            echo "<script> alert('hii.');
                      window.location.href='../Homepage/index.html';
                      </script>";
        }
    } else {
        echo "<script> alert('Invalid input !');
        window.location.href='../Homepage/index.html';
        </script>";
    }

}
?>