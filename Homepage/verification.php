<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" class="form-field animation a6" placeholder="What is your College Name?" name="q1" />
        <input type="text" class="form-field animation a6" placeholder="What is your Mother's name?" name="q2" />
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>

<?php
// Start the PHP session to access session variables
session_start();

if (isset($_POST['submit'])) {
    $question1 = $_POST['q1'];
    $question2 = $_POST['q2'];

    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        $UserName = $_SESSION["username"];
        $Password = $_SESSION["password"];
        $redirectTo = $_SESSION["redirectTo"];

        // Connect to the MySQL database
        require_once('../Database/functions.php');
        $conn = DBConnect();

        // Check if the user exists with the provided username and password
        $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND pass = ?");
        $stmt->bind_param("ss", $UserName, $Password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User exists, now update the security questions
            $stmt = $conn->prepare("UPDATE users SET question1 = ?, question2 = ? WHERE name = ? AND pass = ?");
            $stmt->bind_param("ssss", $question1, $question2, $UserName, $Password);
            $stmt->execute();
            $stmt->close();

            // Handle success or failure here
            echo "<script> alert('Successfully Created !.');
            window.location.href='../$redirectTo';
              </script>";
        } else {
            // User not found, handle the error
            echo "User not found or incorrect password.";
        }
    }
}
?>