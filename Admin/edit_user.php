<?php
// Assuming you have a file named functions.php for database functions
require_once "../User/Database/functions.php";

// Connect to the database
$conn = DBConnect();

// Check if the user ID is provided in the URL
if (isset($_GET['u_id'])) {
    $user_id = $_GET['u_id'];

    // Fetch user details based on user ID
    $query = "SELECT * FROM users WHERE U_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

// Check if the form is submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $collegename = $_POST['collegename'];
    $mothername = $_POST['mothername'];

    // Update user information in the database
    $update_query = "UPDATE users SET fname = '$fullname', name = '$username', question1 = '$collegename', question2 = '$mothername' WHERE U_id = $user_id";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . mysqli_error($conn);
    }
}
?>

<!-- HTML form for editing user information -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
</head>

<body>

    <h2>Edit User Information</h2>

    <form method="post" action="">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $user['fname']; ?>" required><br>

        <label for="username">User Name:</label>
        <input type="text" name="username" value="<?php echo $user['name']; ?>" required><br>

        <label for="collegename">College Name:</label>
        <input type="text" name="collegename" value="<?php echo $user['question1']; ?>" required><br>

        <label for="mothername">Mother Name:</label>
        <input type="text" name="mothername" value="<?php echo $user['question2']; ?>" required><br>

        <input type="submit" value="Update">
    </form>

</body>

</html>