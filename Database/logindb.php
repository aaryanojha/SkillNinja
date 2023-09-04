<?php
// Check if the login form was submitted
if (isset($_POST["login"])) {
    // Get the username and password from the form
    $UserName = $_POST["uname"];
    $Password = $_POST["pass"];

    // Connect to the database
    require_once "functions.php";

    $conn = DBConnect();

    if (!empty($UserName) && !empty($Password)) {

        $query = "SELECT * FROM users WHERE name='$UserName' AND pass='$Password'";
        $result = mysqli_query($conn, $query);
        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $IsAdmin = $row["IsAdmin"];
        }
        if ($IsAdmin) {
            header("Location:../Admin/upload.html"); // Redirect to dashboard page
        } else {
            header("Location:../Homepage/homepage.html"); // Redirect to dashboard page
        }
    } else {
        // User doesn't exist or wrong password
        echo "<script> alert('Invalid Username or Password !');
    window.location.href='../Homepage/index.html';
    </script>";
    }
} else {
    echo "<script> alert('Invalid input !');
window.location.href='../Homepage/index.html';
</script>";
}


?>